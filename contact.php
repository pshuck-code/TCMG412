<?php
// database connection code
//$con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con= mysqli_connect('127.0.0.1', 'root', '','db_connect');

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `tbl_form` (`name`, `email`, `phone`, `message`) VALUES ($txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
  }

?>




