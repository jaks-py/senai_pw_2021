
function hello(){
	alert("Seja bem vindo ao nosso sistema");
}

function mostraNome(){
	alert("Meu nome é marcelo, moro em Cachoeirinha");
}

function validacao(){
	// buscando os valores do dados que estao no form.
	var nome = document.getElementById("nome").value;
	var idade = document.getElementById("idade").value;
	var rg = document.getElementById("rg").value;
	var endereco = document.getElementById("endereco").value;
	
	// validaccoes nome
	if(nome == ""){
		alert("nome deve ser preenchido");
		return false;
	}
	if(nome.length > 15){
		alert("nome deve conter no máximo 15 caracteres");
		return false;
	}
	if(nome.length <= 3 ){
		alert("nome deve conter no minimo 3 caracteres");
		return false;
	}
	
		// validaccoes idade
	if(idade == ""){
		alert("idade deve ser preenchido");
		return false;
	}
	
	if(isNaN(idade) == true){
		alert("Preencha uma idade valida, com somente números.");	
		return false;		
	}else{
		var idadeNumero = parseInt(idade);
		if(idadeNumero < 0 || idadeNumero > 150){
			alert("Idade deve ser um valor entre 0 a 150");		
			return false;
		}
	}
	
	// validaccoes rg
	if(rg == ""){
		alert("Preencha o campo rg");	
		return false;
	}
	
	// validaccoes endereco
	if(endereco == ""){
		alert("Preencha o campo endereco");	
		return false;
	}
	
	// se chegou aqui...é pq tudo esta ok no formulario
	return true;
	
	}