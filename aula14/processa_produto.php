<?php

	$produto = $_POST["produto"];
	session_start();
	if(isset($_SESSION['lista_produto']) == false){			
		$lista = array();
		$_SESSION["lista_produto"] = $lista;
	}
	
	array_push($_SESSION["lista_produto"], $produto);
	
	header('Location: lista.php');	
	

?>