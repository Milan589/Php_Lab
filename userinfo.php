

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<label>First Name:</label>
	<input type="text" name="fname" ><br>
	<label>Last Name:</label>
	<input type="text" name="lname" ><br>
	<label>Phone Number:</label>
	<input type="number" name="phone" ><br>
	<label>Education:</label>
	<select name="sel">
		<option>Select</option>
		<option>SLC</option>
		<option>+2</option>
		<option>Bachelor</option>		
		<option>Master</option>
	</select><br>
	<label>Gender</label>
	<input type="radio" name="gender"  value="male">Male
	<input type="radio" name="gender"  value="female">Female
	<input type="radio" name="gender"  value="other">Other<br>
	<label>Message: </label>
	<textarea cols="20" rows="10" name="msg"></textarea><br>
	<button type="submit" name="submit" >Submit</button>

</form>
<?php 
	if(isset($_POST['submit'])){
		echo $_POST['fname']."<br>";
		echo $_POST['lname']."<br>";	
		echo $_POST['phone']."<br>";
		echo $_POST['sel']."<br>";
		echo $_POST['gender']."<br>";
		echo $_POST['msg'];
	}
?>

</body>
</html>