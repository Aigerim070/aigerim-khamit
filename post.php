<?php
if (isset($_POST['submit'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];

	echo "Hi my name is ".$fname."<br>";
	echo "and surname is ".$lname;
}
?>