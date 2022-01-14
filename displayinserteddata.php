<?php
	$conn=mysqli_connect('localhost','root','','studentinfo');
	$sql= "SELECT * FROM Students ";
	$res = mysqli_query($conn,$sql);

	$data=[];
	if(mysqli_num_rows($res)> 0){
		while($row = mysqli_fetch_assoc($res)){
			array_unshift($data,$row);
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<table>
		<thead>
			<th>S.N</th>
			<th>Name</th>
			<th>Address</th>
			<th>Email</th>
			<th>image</th>
		</thead>
		<?php 
		$i=1;
		foreach($data as $d){
			?>
			<tbody>
				<tr>
					<td><?php echo $i++ ;?></td>
					<td><?php echo $d['name'] ;?> </td>
					<td><?php echo $d['address'] ;?> </td>
					<td><?php echo $d['email'] ;?> </td>
					<!-- <td><?php echo $d['image'] ;?> </td> -->
	
				</tr>
			</tbody>
			<?php } ?>
	</table>

</body>
</html>