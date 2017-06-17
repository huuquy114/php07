<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<?php

	for($i=1;$i<=100;$i++){
		if($i%5 == 0 && $i%3 == 0){
			echo $i.'-'.' MƯỜI LĂM<br/>';
		}
		else if($i%5 == 0){
			echo $i.'-'.' NĂM<br/>';
		}
		else if($i%3 == 0){
			echo $i.'-'.' BA<br/>';
		}
		else{
			echo $i.'-'.' KHÁC<br/>';
		}
	}
	
?>
<body>

</body>
</html>
<?php