<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
       $conn=mysqli_connect('localhost','root','','studentinfo');
        $sql = mysqli_query($conn,"SELECT * FROM users WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($sql);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["username"] = $row['username'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:index.php");
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
	<form action="" method="POST" name="frmUser">
		<div class="message"><?php if($message!="") { echo $message; } ?></div>
		<label>Username:</label>
		<input type="text" name="username"><br>
		<label>Password</label>
		<input type="password" name="password"><br>
		<button type="submit" name="submit">Submit</button>
	</form>
</body>
</html>