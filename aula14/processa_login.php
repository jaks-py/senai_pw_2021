<?php

$login = $_POST["login"];
$senha = $_POST["senha"];

if($login == "marcelo" && $senha == "123"){
	// logado
	session_start();
	$_SESSION['logado'] = true;	
	$_SESSION['usuario'] = $login;
	header('Location: dashboard.php');
	
}else{
	echo "usuário ou senha inválido";
}

?>