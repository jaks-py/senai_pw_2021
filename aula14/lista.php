<?php


	session_start();
	$lista = array();
	$lista = $_SESSION["lista_produto"];
	
	foreach ($lista as $value) {
		echo $value, "</br>";
	}
	
	

?>