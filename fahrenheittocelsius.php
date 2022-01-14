<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<label>Fahrenheit:</label>
	<input type="text" name="fahrenheit" ><br>

	<button type="submit" name="submit" >Submit</button>

</form>
<?php 
	if(isset($_POST['submit'])){

		$fahrenheit = $_POST['fahrenheit'] ;  
       $celsius = (($fahrenheit-32)*5)/9 ;   
       echo("Temperature in celsius is: ");  
       echo($celsius);  
	}
?>

</body>
</html>