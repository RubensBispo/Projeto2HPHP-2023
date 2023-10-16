<?php 
	
	echo "<h1>Bem vindo ao Sistema</h1>";
	if (!empty($_POST['num1'] && $_POST['num2']))
	{
		$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$operacao = $_POST["operacao"];

	switch ($operacao) {
		case 'soma':
			$resp = soma($num1,$num2);
			break;
		case 'subtracao':
			$resp = subtracao($num1,$num2);
			break;
		case 'multiplicacao':
			$resp = multiplicacao($num1,$num2);
			break;
		case 'divisao':
			if ($num2<=0) {
				$resp = "impossível divisão por zero";
			}
			else{
				$resp = divisao($num1,$num2);
			}
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