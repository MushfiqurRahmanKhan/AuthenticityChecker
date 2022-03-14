<?php
include_once 'dbh1.php';

$name = $_POST['name'];
$mail = $_POST['mail'];
$msg = $_POST['msg'];

$sql1 = "INSERT INTO cus(names, mail, msg) VALUES ('$name', '$mail', '$msg');";

mysqli_query($conn1, $sql1);

header("Location: contactus.html?msgsent=sucess");

?>