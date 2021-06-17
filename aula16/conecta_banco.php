<?php

$servername = "localhost";
$database = "aula";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
	die("Conexão com o banco, falhou :( " . mysqli_connect_error());
}

// chegando aqui,..posso fazer qq operacao no banco de dados.
echo "conectado com sucesso no banco de dados :)";

mysqli_close($conn);


?>