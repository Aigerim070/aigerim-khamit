<?php
require('connect.php');

$id = $_GET['id'];

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM Users WHERE ID = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: main.php'); 
    exit;
} else {
    echo "Error deleting record";
}
?>
