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

$sql = "select nome from aluno where id = " . $id_aluno;
$query = mysqli_query($conn,$sql) or
				die("erro ao buscar os alunos");
			
			
$linha = mysqli_fetch_array($query);

		
echo "<form action='processa_editar_aluno.php' method='post'>
ID Aluno:
<input type='text' value='" . $id_aluno. "' disabled> <br>
Nome Aluno: 
<input type='text' name='nome' value='" .$linha["nome"]. "'>
<input type='hidden' name='id' value='" . $id_aluno. "'>
</br>
<input type='submit' value='editar'></form>";


?>