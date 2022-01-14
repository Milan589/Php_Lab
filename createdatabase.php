<?php 
		$servername= "localhost";
		$username="root";
		$password="";
		// $dbname ="studentinfo";

		$conn =mysqli_connect($servername,$username,$password);
		if(!$conn){
			die("Connection error:".mysqli_connect_error());
		}
		$sql="CREATE DATABASE studentinfo";
		if(mysqli_query($conn,$sql)){
			echo "Database created";
		}
		else{
			echo "Error creating databse".mysqli_error($conn);
		}
		mysqli_close($conn);
?>