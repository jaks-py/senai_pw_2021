<?php

$id_aluno = $_GET["id"];

$servername = "localhost";
$database = "aula";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
	die("Conexão com o banco, falhou :( " . mysqli_connect_error());
}

// chegando aqui,..posso fazer qq operacao no banco de dados.

$sql = "delete from aluno where id = " . $id_aluno ;

mysqli_query($conn,$sql) or die(mysqli_error($conn));

mysqli_close($conn);


header('location: listar_alunos.php');

?>