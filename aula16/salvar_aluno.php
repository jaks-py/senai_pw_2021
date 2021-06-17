<?php

$nome_aluno = $_POST["nome"];

$servername = "localhost";
$database = "aula";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
	die("Conexão com o banco, falhou :( " . mysqli_connect_error());
}

// chegando aqui,..posso fazer qq operacao no banco de dados.

$sql = "INSERT INTO aluno (id, nome) values(null, '". $nome_aluno . "')";

$foi_salvo_com_sucesso = mysqli_query($conn,$sql);
if($foi_salvo_com_sucesso){
	echo "aluno salvo com sucesso";
}else{
	echo "erro ao salvar o aluno";
}

mysqli_close($conn);


header('location: listar_alunos.php');

?>