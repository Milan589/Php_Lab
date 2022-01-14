<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		<form method="post" action="<? echo $_SERVER['PHP_SELF'];?>">
			<label>First Number:</label>
			<input type="number" name="first" ><br>
			<label>Second Number:</label>
			<input type="number" name="second" ><br>
			<label>Choose for Operation</label><br>
			<input type="radio" name="oper" value="add">Addition
			<input type="radio" name="oper" value="sub">Subtraction
			<input type="radio" name="oper" value="mul">Multiplication
			<input type="radio" name="oper" value="div">Division 
			<input type="radio" name="oper" value="modul">Modular Division<br>
			<button type="submit" name="submit">Submit</button>
		</form>
		<?php 
		if($_SERVER['REQUEST_METHOD']=="POST"){
			$a = $_POST['first'];
			$b = $_POST['second'];
			$calc =$_POST['oper'];

			if(is_numeric($a) && is_numeric($b))
			{
				if($calc != NULL){
					switch($calc){
					case "add":
					$result = $a + $b;
					break;
					case "sub":
					$result = $a-$b;
					break;
					case "mul":
					$result = $a*$b;
					break;
					case "div":
					$result = $a/$b;
					break;
					case "modul":
					$result = $a%$b;
					break;
					$result="Invalid Calculation";
	 					break;

	 				}
	 				echo "The result is ".$result;
				}
			}
		}
		?>
</body>
</html>