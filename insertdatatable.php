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
// $sql ="INSERT INTO 	 Students(name, address, email, image)
// values('Milan','Lalitpur','milanchaudhary589@gmail.com',LOAD_FILE('D:\\photo.jpg'))";
$sql="INSERT INTO Users(username,password)
		values('Milan','milan')";
if(mysqli_query($conn,$sql)){
	echo "New record created successfully";
}
else{
	echo "error:".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>