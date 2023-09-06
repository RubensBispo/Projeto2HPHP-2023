<?php 
	function somaValor($num1,$num2)
	{
		return($num1 + $num2);
	}

	$a = 20;
	$b = 50;
	

	function somaNum($num1,$num2)
	{
		return($num1+$num2);
	}

	echo "A soma é ".somaNum(20.35,80.50);

	$resp = somaValor($a,$b);

	echo "<br/><br/>O resultado da soma é $resp";

 ?>