<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resultado - Exercício 07</title>

	<style type="text/css">
		
		body {
			font-family: Arial;
		}

		input, select{
			padding:8px; margin: 5px;
		}

	</style>
</head>
<body>
	<h3>Resultado exercício 07 - Ordem crescente V2</h3>

	<?php 

		$maior = $menor = 0;

		if ($_POST['num1'] >= $_POST['num2']) {
			$maior = $_POST['num1'];
			$menor = $_POST['num2'];
		}

		else {
			$maior = $_POST['num2'];
			$menor = $_POST['num1'];
		}
		
		echo "Resultado: <b>$maior é maior que $menor!</b>";

	?>
</body>
</html>