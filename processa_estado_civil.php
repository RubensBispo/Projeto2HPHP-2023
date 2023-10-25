<?php 
	
	echo "<h1>Estado Civil</h1>";
	/*
	if (isset($_POST['estado_civil']))
	{
		echo $_POST['estado_civil'];
	}
	*/


	echo "<h3>Recuperando os dados - Elemento Option</h3>";
	echo "<b>Estado (sigla):</b>".$_POST['estados']."<br/></br>";

	if (isset($_POST['nome']))
	{
		echo "Olá, usuário <b>".$_POST['user']."</b> você possui  o nivel ".$_POST['nivel']." de acesso<br/></br></br>";
	}

	if (isset($_POST['asp']))
	{
		echo "<b>ASP:".$_POST['asp'];
		echo "<br/>
	}
	if (isset($_POST['php']))
	{
		echo "<b>PHP:".$_POST['php'];
		echo "<br/>
	}

	if (isset($_POST['java']))
	{
		echo "<b>Java:".$_POST['java'];
		echo "<br/>
	}

	if (isset($_POST['mensagem']))
	{
		echo "<b>Mensagem;</b><br>".$_POST['mensagem'];
	}
	
 ?>