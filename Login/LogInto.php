<?php
session_start();
include ('Connection.php');

if(empty($_POST['email']) || empty($_POST['password'])) {
	header('Location: Login.php');
	exit();
} 


$email = $_POST['email'];
$password = $_POST['password'];

$result = mysqli_query($connection, "SELECT * FROM `tableLogin`
WHERE `email` = '$email' AND `password`= '$password'");

if(mysqli_num_rows ($result) > 0 )
{
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
header('location: ../App/index.php');
}
else{
	$_SESSION['not authenticated'];
  unset ($_SESSION['email']);
  unset ($_SESSION['password']);
  header('location:Login.php');

  }
?>

