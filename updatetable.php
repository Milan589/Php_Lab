<?php
$servername ="localhost";
$username = "root";
$password ="";
$dbname = "studentinfo";

//create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
//check connection
if(!$conn){
	die("connection failed:".mysqli_connect_error());
}
$sql = "UPDATE Students SET name= 'Shiva Thapa' WHERE id =5";
if(mysqli_query($conn,$sql)){
	echo "record updated successfully";
}
else{
	echo "Error updating record: ".mysqli_error($conn);
}
mysqli_close($conn);
?>