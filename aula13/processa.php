<?php

	$nome = $_POST["nome"];
	$idade = $_POST["minha_idade"];
	
	
	echo "<b>Eu recebi o valor do navegador </b>" . $nome;
	echo "</br>";
	
	$idadeDobrada = $idade * 2;
	
	echo "Minha idade é: " . $idade;
	echo "</br>";
	echo "Idade X 2 = " . $idadeDobrada;
	


?>