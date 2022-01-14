<?php 
$n = array(
	"item"=> 1,
	"item1"=> 2,
	"item2"=> 3);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<table border="1" width="200" height="200">
		<tr>	
			<td><?php echo $n['item']; ?></td>	
		</tr>
		<tr>
			<td><?php echo $n['item1']; ?></td>
			
		</tr>
		<tr>
			<td><?php echo $n['item2']; ?></td>
		</tr>

		
	</table>

</body>
</html>