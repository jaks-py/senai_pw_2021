<?php

	session_start();
	if(isset($_SESSION['logado']) &&
		$_SESSION['logado'] == true){	
		
		echo "Seja bem vindo: " . $_SESSION["usuario"];
		echo "</br></br></br>";
		echo "cadastro de pessoa";
		
	}else{
		echo "Por favor, faça seu login novamente.";
		echo "<a href='login.html'>Login</a>";
	}

?>