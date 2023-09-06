<?php 

	$a = 10;
	$b = 3;
	$opcao = 1;

	$txt = "Resultado da operção";
	$res = "Resultado da operção";

	echo "<br/>Entre com dois valores :<br/><br/>";

	echo "Escolha a operação<br/><br/>";

	echo "1 - Soma<br/>";
	echo "2 - Subtração<br/>";
	echo "3 - Divisão<br/>";
	echo "4 - Multiplicação<br/><br/>";

	function soma($num1,$num2)
	{
		return $num1 + $num2;
	}

	function subtracao($num1,$num2)
	{
		return $num1 - $num2;
	}

	function divisao($num1,$num2)
	{
		return $num1 / $num2;
	}

	function multiplicacao($num1,$num2)
	{
		return $num1 * $num2;
	}	

	switch ($opcao) {
		case '1':
			$resp = soma($a,$b);
		    $op = "Soma";
		    echo $txt . " Soma" . "<br/>". $resp;
		    
			break;
		case '2':
			$resp = subtracao($a,$b);
		    $op = "Subtração";
			break;
		case '3':
			if ($b=0)
			{
				$resp = divisao($a,$b);
		    	$op = "Divisão";
			}
			else{
				echo "Não é possível a divisão por 0";
			}

			break;
		case '4':
			$resp = multiplicacao($a,$b);
		    $op = "Multiplicação";
			break;
		default:
				echo "Opção inválida";
			break;

		echo $txt . "Multiplicação" . "<br/>". $resp;
	}

?>