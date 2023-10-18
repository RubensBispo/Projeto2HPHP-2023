<?php 
	
	echo "<h1>Bem vindo ao Sistema</h1>";
	if (!empty($_POST['num1'] && $_POST['num2']))
	{
		$qs = $_POST['qualidadeSevico'];

		switch ($qs) {
			case '1':
				$resp = soma($num1,$num2);
				break;
			case '2':
				$resp = subtracao($num1,$num2);
				break;
			case '3':
				$resp = multiplicacao($num1,$num2);
				break;
			
			default:
				// code...
				break;
		}
	}
	

	function soma($num1,$num2)
	{
		return($num1 + $num2);
	}

	function subtracao($num1,$num2)
	{
		return($num1 - $num2);
	}

	function multiplicacao($num1,$num2)
	{
		return($num1 * $num2);
	}

	function divisao($num1,$num2)
	{
		return($num1 / $num2);
	}

	echo "$resp";
 ?>