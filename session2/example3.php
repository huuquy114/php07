<!DOCTYPE html>
<html>
<head>
	<title>Bài tập</title>
	<meta charset="utf-8">
</head>
<body>

<?php
	define ("BIRTH",1993);  // định nghĩa năm sinh
	define("NAME", "Quý");	// định nghĩa tên
	define("FIRSTNAME", "Hữu"); // định nghĩa tên lót
	echo NAME.' sinh năm '.BIRTH.'<br/>';
	
	if(BIRTH%2==0)
		{
	
		}
	else
		{
		for ($i=100; $i>=1; $i--)
			{
				if(BIRTH%2 != 0)
					{
						echo "Nếu năm sinh không chia hết cho 2 in ra tên và tên lót<br/>";
						echo FIRSTNAME.' '.NAME.'<br/>';
						break;
					}
				else
					{
						echo NAME.'<br/>';
						break;
					}
			}
		
			echo "Tên của bạn có ".strlen(NAME). " ký tự.";
			echo "<br/>";
			echo str_replace("Quý", "Maria",NAME);
		}
	echo "<br/>";
	//hàm kiểm tra năm sinh chia hết cho 9
	function kiemtra($birth)
		{
			if($birth%9 == 0)
			{
				return 99;
			}
			else
			{
				return 66;
			}
		}
	
	echo kiemtra(BIRTH);
	echo "<br/>";
	echo "Có tất cả ".str_word_count(NAME). " từ trong tên  của bạn.";
	
?>

</body>
</html>
