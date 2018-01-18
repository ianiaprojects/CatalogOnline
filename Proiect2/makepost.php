<?php
session_start();

$host = "localhost";
$user =  "root";
$pass =  "";
$db_name = "project";
$connection = new mysqli($host, $user, $pass, $db_name);

$name = $_POST['user'];
$post = $_POST['post'];
$date = date("Y-m-d");

$makeAccount = mysqli_query($connection, "INSERT INTO posts(poster, text, date) VALUES('$name', '$post', '$date')");

header('Location: index.php');

?>
