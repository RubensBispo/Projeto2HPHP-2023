<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculadora</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<style type="text/css">
		.box{
			width: 600px;
			margin:80px auto;
			border:1px solid #ccc;
			padding: 30px;
		}

	</style>
</head>
<body>
	<div id="" class="box">
		<form action="processa_calculadora.php" method="post">
			<strong>Calculadora de Gorjeta</strong><br><br>
			<div class="form-group">
				<label for="valorDaConta"><b>Valor da Conta</b></label>
				<input type="text" class="form-control" id="valorDaConta"  name="valorDaConta" placeholder="">
			</div>
			<div class="form-group">
				<label for="qualidadeSevico">Selecione</label>
				<select class="form-control" id="qualidadeSevico" name="qualidadeSevico">
					<option value="10">Exelente 10%</option>
					<option value="8">Ótimo 8%</option>
					<option value="5">Bom 5%</option>
					<option value="2">Ruim 2%</option>
				</select>
			</div>
			<button type="submit" class="btn btn-primary btn-lg btn-block">Calcular Gorgeta</button>

			<div class="form-group">
				<label for="valorGorjeta"><b>Valor da Gorgeta</b></label>
				<input type="text" class="form-control" id="valorDaConta" placeholder="">
			</div>
			<div class="form-group">
				<label for="valorTotal"><b>Valor total:</b></label>
				<input type="text" class="form-control" id="valorDaConta" name="<?php  ?>"  placeholder="">
			</div>
		</form>

	</div>

</body>
</html>