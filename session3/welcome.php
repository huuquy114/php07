<?php

	if(isset($_POST["Check"])){
		 if($_POST["name"] == '' && $_POST["email"] ==''){
			 echo "Null<br/>";
			 header("Refresh:3, url=example.php");
		 }
		 else{
			 echo $_POST['name'];
			echo "<br/>";
			echo $_POST['email'];
			echo "<br/>";
		 }
	}
	
	//Xử lý úp hình khi người dùng ấn Upload
	if(isset($_POST['Check'])){ // Người dùng đã ấn submit
		 if($_FILES['file']['name'] != NULL){ // Đã chọn file
			// thực hiện công việc upload
		 }else{
			echo "Vui lòng chọn file<br/>";
		 }
  }

	//kiểm tra định dạng hình ảnh
if($_FILES['file']['type'] == "image/jpeg" || $_FILES['file']['type'] == "image/png" || $_FILES['file']['type'] == "image/gif"){ 
      // là file ảnh
      // Tiến hành code upload
  }else{
      // không phải file ảnh
      echo "Kiểu file không hợp lệ<br/>";
  }
  
  // Kiểm tra kích thước file ảnh và tiến hành upload
  if($_FILES['file']['size'] > 1048576){
     echo "File không được lớn hơn 1mb";
  }else{
     // file hợp lệ, tiến hành upload
     $path = "images/"; // file lưu vào thư mục data
     $tmp_name = $_FILES['file']['tmp_name'];
     $name = $_FILES['file']['name'];
     $type = $_FILES['file']['type']; 
     $size = $_FILES['file']['size']; 
	 
	 /*
	 exit($tmp_name);
     */
	 
	 // Upload file
     move_uploaded_file($tmp_name,$path.$name);
     echo "File uploaded! <br />";
     echo "Tên file : ".$name."<br />";
     echo "Kiểu file : ".$type."<br />";
     echo "File size : ".$size;
	 
	 $user=$_POST["name"];
	 $email=$_POST["email"];
	 
	 echo "<br/>";
	 //thiết lập kết nối
	 $servername='localhost';
	 $username='root';
	 $password='';
	 $database='php07';
	 
	 $conn = mysqli_connect($servername, $username, $password, $database);
	 
	 $sql="INSERT INTO users(name, email, avatar) VALUES('$user', '$email', '$name')";
	 
	 /*
	 if(mysqli_query($conn, $sql)){
		 echo 'Connect Success';
	 }
	 else{
		 echo 'Loi'. $sql.'<br./>'.$mysqli_error($conn);
	 }
	 */
	 mysqli_query($conn,$sql);
	 mysqli_close($conn);
  }
?>

