<?php
session_start();
require_once("connection.php");
$db = new DBConnect();
$loggedin = 0;
if(isset($_SESSION['loggedin'])){
  $loggedin = 1;
  $account = $_SESSION['loggedin'];
  $getdetails = mysqli_query($db->getConnection(), "SELECT * FROM account WHERE email = '$account'");
  $details = mysqli_fetch_object($getdetails);
}


if(!$loggedin){
  require_once("login.php");
}
else{
  require_once("header.php");

  if(isset($_GET['act'])){
    include($_GET['act'].".php");
  }
  else {
      include("front.php");
  }

  require_once("footer.php");
}

 ?>
