<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
		$salarios = array("João"=>2000,"Pedro"=>1000,"Maria"=>500);

		echo "Salário de João é ". $salarios['João']."<br/>";
		echo "Salário de Pedro é ". $salarios['Pedro']."<br/>";
		echo "Salário de Maria é ". $salarios['Maria']."<br/><br/>";


		$salarios['João'] = 'Alto';
		$salarios['Pedro'] = 'Médio';
		$salarios['Maria'] = 'Baixo';

		echo "Salário de João é ". $salarios['João']."<br/>";
		echo "Salário de Pedro é ". $salarios['Pedro']."<br/>";
		echo "Salário de Maria é ". $salarios['Maria']."<br/>";
	 ?>
</body>
</html>