<?php  
	
	// Escopo geral

	$nome = "Alexandre Mota";
	$a = 10;
	$b = 20;
	$c = 30;	


	function exibirNome()
	{	
		global $nome;
		echo $nome;
	}

	exibirNome();
	echo "<hr>";

	///////////////

	function exibeCidade() {

		global $cidadeNome;
		$cidadeNome = "João Pessoa";

	} 

	exibeCidade();
	echo $cidadeNome;
	echo "<hr>";

	/////////

	function somaNumeros(){
		//Estou pegando os valores das variaveis globais que criei la em cima, e trazendo pro escopo local aqui

		echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];

	}

	somaNumeros();

?>