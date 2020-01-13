<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Gestor de Archivos</title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/gestor.css">
</head>
<body>

	<div class="wrapper fadeInDown">
		<div id="formContent">
			<!-- Tabs Titles -->

			<!-- Icon -->
			<div class="fadeIn first py-5">
				<img src="assets/img/Captura.png" width="150px" class="img-fluid" alt="">
				<h1>Gestor de archivos</h1>
			</div>

			<!-- Login Form -->
			<form>
				<input type="text" id="login" class="fadeIn second" name="login" placeholder="Usuario">
				<input type="text" id="password" class="fadeIn third" name="login" placeholder="Contraseña">
				<div class="py-3 container">
					<div class="row">
						<div class="col-md-12 px-5">
							<button class="btn btn-success btn-block">Entrar</button>
						</div>
					</div>
				</div>
			</form>

			<!-- Remind Passowrd -->
			<div id="formFooter">
				<a href="<?php echo base_url()?>gestor-registro">Registrarse</a>
			</div>

		</div>
	</div>


	<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

</body>
</html>
