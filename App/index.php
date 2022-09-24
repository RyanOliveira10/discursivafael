<?php
include_once "./src/conexao/Conexao.php";
include_once "./src/dao/UsuarioDAO.php";
include_once "./src/model/Usuario.php";
include('../Login/VerificaLogin.php');

//instancia as classes
$usuario = new Usuario();
$usuariodao = new UsuarioDAO();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>CRUD Simples PHP</title>
  <style>
    .menu,
    thead {
      background-color: #bbb !important;
    }

    .row {
      padding: 10px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-light bg-light menu">
    <div class="container">
      <a class="navbar-brand" href="#">
        CRUD PHP POO
      </a>
      <h2>Olá, <?php echo $_SESSION['email']; ?></h2>
      <a href="../Login/Logout.php" class="btn btn-info">Sair</a>
    </div>
  </nav>

  <main>
    <a href="./src/view/Usuario.php" class="btn btn-info">Listar usuários</a>
  </main>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>