<?php 
$localhost = 'localhost';
$user_name = 'root';
$senha = "";
$db = "pessoa";

$con = mysqli_connect($localhost,$user_name,$senha,$db);
if (mysqli_connect_errno()){
	echo "Erro ao conectar com o banco de dados: " . mysqli_connect_error();
}else{
	$sql = "select nome,sobrenome from pessoa";
	$resultado = mysqli_query($con,$sql);
	/*
	echo "<h2>Pessoas</h2>";
	while ($pessoa=mysqli_fetch_array($resultado))
	{
		echo $pessoa['nome'] . "  ".$pessoa['sobrenome']. "<br><br/>" ;
	}
	mysqli_close($con);
	*/
}

?>
<html>
<head>
	<style>
		#customers {
			font-family: Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		#customers td, #customers th {
			border: 1px solid #ddd;
			padding: 8px;
		}

		#customers tr:nth-child(even){background-color: #f2f2f2;}

		#customers tr:hover {background-color: #ddd;}

		#customers th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #04AA6D;
			color: white;
		}
	</style>
</head>
<body>

	<h1>Pessoas</h1>

	<table id="customers">
		<tr>
			<th>Nome</th>
			<th>Sobrenome</th>
			<th>Idade</th>
		</tr>
		<?php
		if (!empty($resultado))
		{
			while ($pessoa=mysqli_fetch_array($resultado))
			{
				echo "<tr><td>".$pessoa['nome'] . "</td><td>".$pessoa['sobrenome']. "</td></tr>" ;
			}
			mysqli_close($con);
		}

		?>
	</table>

</body>
</html>