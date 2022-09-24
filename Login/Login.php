<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Faça Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
	<style>

		body{
			box-sizing: border-box;
			padding: 0;
			margin: 0;
			scroll-behavior: smooth;
		}

		.container-fluid{
			display: flex; 
			flex-direction: column;  
			max-width: 700px; 
			border-radius: 15px; 
			padding: 2rem; 
			background-color: #fff;
		}

		section{
			margin: 0 auto;
			text-align: center;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}

		.img{
			display: flex;
			justify-content: center;
			align-items: center;
			width: 400px;
		}

		.img img{
			width: 100%;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<section class="logo">
			<div class="img">
				<img src="https://lh3.googleusercontent.com/p/AF1QipM_0brbHGIXU8uipkYjDryE7Nx0Zc1z1jcw0-a_=w1080-h608-p-no-v0" alt="Unifael">
			</div>
		</section>
		<?php
		if (isset($_SESSION['not authenticated'])) :
			?>
			<div class="notification is-danger">
				<p>ERRO: Usuário ou senha inválidos.</p>
			</div>
			<?php
		endif;
		unset($_SESSION['not authenticated']);
		?>
		<main>
			<form action="../Login/LogInto.php" method="POST">
				<div class="field">
					<label class="label">Email</label>
					<div class="control has-icons-left has-icons-right">
						<input class="input" type="email" placeholder="unifael@gmail.com" name="email" value="">
						<span class="icon is-small is-left">
							<i class="fas fa-envelope"></i>
						</span>
						<span class="icon is-small is-right">
							<i class="fas fa-exclamation-triangle"></i>
						</span>
					</div>
					<!--<p class="help is-danger">Esse email é inválido</p>-->
				</div>
				<div class="field">
					<label class="label">Senha</label>
					<div class="control has-icons-left has-icons-right">
						<input class="input" type="password" placeholder="unifael" name="password" value="">
						<span class="icon is-small is-left">
							<i class="fas fa-user"></i>
						</span>
						<span class="icon is-small is-right">
							<i class="fas fa-check"></i>
						</span>
					</div>
					<!--<p class="help is-success">Essa senha é inválida</p>-->
				</div>

				<div class="field is-grouped">
					<div class="control">
						<button type="submit" class="button is-link">Entrar</button>
					</div>
					<div class="control">
						<button class="button is-link is-light">Esqueci minha senha</button>
					</div>
				</div>
			</form>
		</main>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>