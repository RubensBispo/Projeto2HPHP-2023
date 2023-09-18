<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
		$num = array(1,2,3,4,5);

		foreach ($num as $valor) {
			echo "Valor é $valor <br/>";
		}

		$num[0] = "um";
		$num[1] = "dois";
		$num[2] = "três";
		$num[3] = "quatro";
		$num[4] = "cinco";

		foreach ($num as $valor) {
			echo "Valor é $valor <br/>";
		}
	?>
</body>
</html>