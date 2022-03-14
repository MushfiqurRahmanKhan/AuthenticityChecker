<?php
include_once 'dbh.php';

$user = $_POST['user'];
$pass = $_POST['pass'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];

$sql = "INSERT INTO reg_info (user, pass, phone_number, email) VALUES ('$user', '$pass', '$phone_number', '$email');";

mysqli_query($conn, $sql);

header("Location: index.html?signup=sucess");

?>