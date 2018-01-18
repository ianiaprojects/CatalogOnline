<?php
session_start();

$host =    "localhost";
$user =     "root";
$pass =     "";
$db_name =  "project";
$connection = new mysqli($host, $user, $pass, $db_name);

$name  = $_POST['name'];
$email = $_POST['email'];
$rank  = $_POST['rank'];

$password = hash('sha256', $_POST['password']);

$class1 = $_POST['class1'];
$class2 = $_POST['class2'];
$class3 = $_POST['class3'];
$class4 = $_POST['class5'];
$class5 = $_POST['class5'];
$class6 = $_POST['class6'];
$class7 = $_POST['class7'];

echo '<br>';
echo 'Prenume Nume:'.$name.'
  <br>Email:'.$email.'
  <br>Parolă:'.$password.'
  <br>Tip utilizator(0 administrator, 1 student):'.$rank.'

  <br>Notă Capitole Speciale de Informatică:'.$class1.'
  <br>Notă Disciplina Complementară:'.$class2.'
  <br>Notă Ecuații Diferențiale:'.$class3.'
  <br>Notă Inteligență Artificială:'.$class4.'
  <br>Notă Metode de Modelare și Proiectare:'.$class5.'
  <br>Notă Stagiu de Licență:'.$class6.'
  <br>Notă Tehnologii Web'.$class7;

$makeAccount = mysqli_query($connection, "INSERT INTO account(name, email, password, rank)
                                          VALUES('$name', '$email', '$password', '$rank')");

$getId = mysqli_query($connection, "SELECT * FROM account WHERE email ='$email'");
if(!$getId){
  die("ERROR");
}
$accId = mysqli_fetch_object($getId);
$user_id = $accId->id;

if($rank == 0){
  $putMarks = mysqli_query($connection, "INSERT INTO marks(id, class1, class2, class3, class4, class5, class6, class7)
                                         VALUES('$user_id', '$class1', '$class2', '$class3', '$class4', '$class5', '$class6', '$class7')");

  if(!$putMarks){
      echo mysqli_error($connection);
  }
}

header('Location: index.php');
