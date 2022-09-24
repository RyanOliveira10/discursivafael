<?php
session_start();

if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['password']) == true))
{
  header('Location: ../Login/Login.php');
  }

$login = $_SESSION['email'];