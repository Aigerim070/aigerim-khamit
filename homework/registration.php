<?php
session_start();
header('location: loginform.php');
$con = mysqli_connect('localhost', 'root', 'root');
mysql_select_db($con, 'user registration');
$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where name = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num == 1) {
	echo "Username is already taken!";
} else{
	$reg = "Insert into usertable(name, password) values ('$name', '$pass')";
	mysqli_query($con, $reg);
	echo "Registration is Successfull!";
}
?>