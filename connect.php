<?php

$conn = mysqli_connect('localhost', 'root', 'root');
$select_db = mysqli_select_db ($conn, 'Users');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
