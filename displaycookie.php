<?php 
	setcookie('user','Milan',time()+1*24*60*60,"/","",0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<p>Show Information</p>
	<?php
	echo $_COOKIE['user']; 
	?>
</body>
</html>