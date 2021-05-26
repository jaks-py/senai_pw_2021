<?php

	if(isset($_GET["v1"])){
		$valor1 = $_GET["v1"];
	}else if(isset($_POST["v1"])){
		$valor1 = $_POST["v1"];
	}else{
		echo "Por favor, digite o valor v1 via GET ou POST";
		return;
	}
	
	if(isset($_GET["v2"])){
		$valor2 = $_GET["v2"] ;
	}else if(isset($_POST["v2"])){
		$valor2 = $_POST["v2"];
	}else{
		echo "Por favor, digite o valor v2 via GET ou POST";
		return;
	}
	
	if(isset($_GET["op"])){
		$op = $_GET["op"] ;
	}else if(isset($_POST["op"])){
		$op = $_POST["op"];
	}else{
		echo "Por favor, digite o valor op via GET ou POST";
		return;
	}
	
	
	$resultado = 0;
	
	if($op == "+"){
		$resultado = $valor1 + $valor2;
		echo "o resultado da soma foi: " . $resultado;
	}else if($op == "-"){
		$resultado = $valor1 - $valor2;
		echo "o resultado da subtracao foi: " . $resultado;
	}else{
		echo "A operação " . $op . " não é reconhecida";
		return;
	}

	

?>