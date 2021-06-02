<?php

	session_start();
	if(isset($_SESSION['logado']) &&
		$_SESSION['logado'] == true){	
		
		echo "Seja bem vindo: " . $_SESSION["usuario"];
		echo "</br></br></br>";
		echo "<a href='cadastro_pessoa.php'>Cadastro Pessoa</a>";
		echo "</br></br></br>";
		echo "<a href='logout.php'>Logout</a>";
		
	}else{
		echo "Por favor, faça seu login novamente.";
		echo "<a href='login.html'>Login</a>";
	}

?>