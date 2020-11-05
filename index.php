<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Nelson Mandela</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <script src="layout/js/login.js"></script>
    <link rel="stylesheet" type="text/css" href="layout/css/login.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body class="my-login-page">

	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="images/maconaria.jpg" alt="logo">
                    </div>
					<div class="card fat">
						<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item" aria-current="page">
								Loja Maçônica Nelson Mandela
							</li>
							<li class="breadcrumb-item active">
								Nº 206
							</li>
						</ol>
						</nav>
						<div class="card-body">
							<h4 class="card-title">Entrar</h4>

							<?php
							// <> VERIFICA SE O ACESSO FOI NEGADO

							if (isset($_SESSION['nao_autenticado'])) {
								echo "<div class='alert alert-danger' role='alert'>Email ou senha inválidos!</div>";
							}
							unset($_SESSION['nao_autenticado']);

							// </> VERIFICA SE O ACESSO FOI NEGADO
							?>

							<form method="post" class="my-login-validation" novalidate="" action="login.php">

								<div class="form-group">
									<label for="email">E-mail</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Senha
										<a href="" class="float-right">
											Esqueceu sua senha?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Lembrar-me</label>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Entrar
									</button>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
