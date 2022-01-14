<?php 

// for($i=0;$i<20;$i++){
// 	echo "Orchid International College <br>";
// }
//miltidimentional in table

$contact = array(
	array(
		"name" => "Milan",
		"email" => "milanchaudhary589@gmail.com",
		),
	array(
		"name" => "Aashish",
		"email" => "pokharelaashish@gmail.com",
		)
);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<table border="1">
	<tr>
		<td><?php echo "Name" ;?></td>
		<td><?php echo "Email" ;?></td>
		
	</tr>
	<tr>
		<td><?php echo $contact[0]['name'] ;?></td>
		<td><?php echo $contact[0]['email'];?></td>
		
	</tr>
		<tr>
		<td><?php echo $contact[1]['name'];?></td>
		<td><?php echo $contact[1]['email'] ;?></td>
		
	</tr>
</table>
</body>
</html>