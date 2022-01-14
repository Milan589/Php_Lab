<?php
	$cookie_name ='user';
	$cookie_value ='Milan'; 
	setcookie($cookie_name,$cookie_value,time()-(1*24*60*60),"/","",0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
		if(!isset($_COOKIE['cookie_name'])){
			echo "Cookie name ".$cookie_name."is not set"."<br>";
		}
		else{
			echo "Cookie Name is".$cookie_name."is set";
			echo "Cookie value is ".$_COOKIE['$cookie_name'];
		}
		// echo $_COOKIE['user']
	?>
</body>
</html>