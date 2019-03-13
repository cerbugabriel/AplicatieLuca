<?php
$con=mysqli_connect("sql7.freemysqlhosting.net","sql7282726","XKEvf9cnqN","sql7282726");

$name = $_POST["name"];
$username =$_POST["username"];
$password = $_POST["password"];

$statement = mysqli_prepare($con,"INSERT INTO User (name,username,password) VALUES(?,?,?,?)");
mysqli_stmt_bind_param($statement,"sss",$name,$username,$password);
mysqli_stmt_execute($statement);

mysqli_stmt_close($statement);

mysqli_close($con);
?>