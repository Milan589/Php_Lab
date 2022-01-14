<?php

//connect to database
$conn = mysqli_connect('localhost','root','','studentinfo');
//query to delete record from tbl_category with id
$sql = "delete from students where id = 3";
//execute query
mysqli_query($conn, $sql);
echo "Deleted successfully"
// //redirect to listing page
// header('location:displayformdata.php');
?>