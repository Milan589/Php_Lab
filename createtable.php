<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname = "studentinfo";

//create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
//check connection
if(!$conn){
	die("connection failed:".mysqli_connect_error());
}

//create table 
// $sql = "CREATE TABLE Students (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// name VARCHAR(30) NOT NULL,
// address VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// image BLOB NOT NULL
// )";
$sql= "CREATE TABLE Users (
  id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username varchar(20) NOT NULL,
  password varchar(20) NOT NULL)";
if(mysqli_query($conn,$sql)){
	echo "Student created successfully";
}
else{
	echo "error creating database:".mysqli_error($conn);
}
mysqli_close($conn);

?>