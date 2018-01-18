<?php
session_start();

require_once("connection.php");
$db = new DBConnect();

$email = $_POST['username'];
$password = hash('sha256', $_POST['password']);
//echo $email;

$checkAccount = mysqli_query($db->getConnection(), "SELECT * FROM account WHERE email = '$email'");
if(!$checkAccount->num_rows){
  die("Account does not exist!");
}

$details = mysqli_fetch_object($checkAccount);

if($details->password != $password){
  die("Password is incorrect!");
}

$_SESSION['loggedin'] = $email;
header('Location: index.php');

?>
