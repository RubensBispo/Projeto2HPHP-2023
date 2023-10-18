<?php 
	
	echo "<h1>Bem vindo ao Sistema</h1>";
	if (!empty($_POST['valorDaConta'] && $_POST['qualidadeSevico']))
	{
		$qs = $_POST['qualidadeSevico'];
		$vc = $_POST['valorDaConta'];
		$resp = 0;

		switch ($qs)
		{
			case '10':
				$resp = calculaValor($vc,$qs);
				break;
			case '8':
				//$resp = calculaValor($vc,qs);
				break;
			case '5':
				//$resp = calculaValor($vc,qs);
				break;
			case '2':
				//$resp = calculaValor($vc,qs);

				break;
			default:
				// code...
				break;
		}
	}

	function calculaPorcentagem($vl,$porc)
	{
		return ($vl*($porc/100));
	}

	function calculaValor($vl,$porc)
	{
		
		return $vl + calculaPorcentagem($porc);
	}

	print_r($resp);

 ?>