<?php

$id_aluno = $_POST["id"];
$nome_aluno_alterado = $_POST["nome"];

$servername = "localhost";
$database = "aula";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
	die("Conexão com o banco, falhou :( " . mysqli_connect_error());
}

$sql = "update aluno set nome ='" . $nome_aluno_alterado  . "' where id = " . $id_aluno ;
mysqli_query($conn,$sql) or die(mysqli_error($conn));

mysqli_close($conn);

header('location: listar_alunos.php');

?>