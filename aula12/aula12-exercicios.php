<?php

echo "Meu nome é Marcelo e tenho 50 anos</br>";

exercicio2();

validaNomeIdadeExercicio3("pedro",80);

criaTabelaExercicio4(10);

function criaTabelaExercicio4($totaLinhas){
	echo "<table border=1>";
	for($i=0; $i < $totaLinhas; $i++){
		echo "<tr>";
			echo "<td>";
			echo "valor da variavel contadora " . $i;
			echo "</td>";
		echo "</tr>";
	}
	echo "</table>";
}

function validaNomeIdadeExercicio3($nome, $idade){
	if($nome == ""){
		echo "Preenha seu nome<br>";
	}else if($idade < 0 || $idade > 120){
		echo "Idade invalida, digite um valor entre 0 à 120.";
	}else{
		echo "Dados validados com sucesso !!!";
	}
}

function exercicio2(){
	for($i=0; $i < 10; $i++){
		echo "<b>Maria - Cachoeirinha</b></br>";
	}	
}

?>