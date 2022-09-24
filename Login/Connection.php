<?php
define('HOST', 'sql812.main-hosting.eu'); // O VALOR DE HOST É O IP DO BANCO DE DADOS MYSQL
define('USER', 'u635830876_ryanoliveira');
define('PASSWORD', '9SbLxTb?^');
define('DBNAME', 'u635830876_ryletech');

$connection = mysqli_connect(HOST, USER, PASSWORD, DBNAME) or die('Não foi possível conectar');
?>

