<?php

$servername = "localhost";
$database = "aula";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
	die("Conexão com o banco, falhou :( " . mysqli_connect_error());
}

$sql = "select id, nome from aluno";

$query = mysqli_query($conn,$sql) or
				die("erro ao buscar os alunos");
				
while($linha = mysqli_fetch_array($query)){
	echo "<br>id: " . $linha["id"] . " Nome:" . $linha["nome"];
}


mysqli_close($conn);


?>