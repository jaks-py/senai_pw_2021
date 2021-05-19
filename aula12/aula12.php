<?php
// somente codigo php 
// declaracao de variaveis.
$nome = "marcelo";
$idade = 18;


echo "</br>";
echo $idade;

echo "<table border=1> ";
echo "<tr>";
echo "<td>";
echo $nome;
echo "</td>";
echo "</tr>";
echo "</table> ";

$preco = 15.50;

if($preco > 10.00){
	echo $preco . " é maior que 10.0";
}else{
	echo $preco . " é menor que 10.0";
}
	
echo "</br>";
$salario = 1000;
$acrescimo = 100;

// Operadores booleanos
// AND && , OR || , NOT !

// Operadores comparação
// >, <, >=, <=, ==, !=(diferente)
// tabela verdade
// and = f f = f
// and = f v = f
// and = v v = v;
// and = v f = f

// or = f f = f
// or = f v = v
// or = v v = v;
// or = v f = v

// not = v = f
// not = f = v

// v && v = v
if($salario > 500 && $acrescimo > 100){
	echo "salario alto";
}else if($salario > 300  && $acrescimo < 499){
	echo "salario medio";
}else{
	echo "salario baixo";
}



?>


<?php

// implementacao da funcao
function soma($v1, $v2){
	$total = $v1 + $v2;
	return $total;
}

// implementacao da funcao
function escreveNome(){
	echo "</br>Meu nome é marcelo";
}

// chamada das funcoes.
$somador = soma(10,15);
echo "</br>O resultado da funcao é: " . $somador;

escreveNome();

?>


