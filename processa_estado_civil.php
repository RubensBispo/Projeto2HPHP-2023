<?php 
	
	echo "<h1>Estado Civil</h1>";
	/*
	if (isset($_POST['estado_civil']))
	{
		echo $_POST['estado_civil'];
	}
	*/

	if (isset($_POST['nome']))
	{
		echo "Olá, usuário <b>".$_POST['user']."</b> você possui ".$_POST['nivel']." o nivel de acesso";
	}

	echo "<h3>Recuperando os dados - Elemento Option</h3>";
	echo "<b>Estado (sigla):</b>".$_POST['estados'];
	
 ?>