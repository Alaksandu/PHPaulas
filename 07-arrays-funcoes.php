<?php  
	// ALgumas funções arrays, outras podem ser encontradas na documentação do php
	
	$nomes = array("Filho"=>"Alexandre", "Filha"=>"Alessandra", "Mãe"=>"Virginia", "Pai"=>"Severino");

	// ro is array retorna true ou false se for um array
	if(is_array($nomes)){

		echo "É um array";
	} else {
		echo "Não é um array";
	} 

	echo "<br>";
	print_r($nomes);
	echo "<br>";

	// ele retorna true ou false se tem o valor naquele array
	echo in_array("Alexandre", $nomes);

	// Ele cria um array com os indices de um outro array
	$indices = array_keys($nomes);
	echo "<hr>";
	print_r($indices);

	// cria um novo array com os valores de um array indicado
	echo "<hr>";
	$novoArray = array_values($nomes);
	print_r($novoArray);

	// unir arrays, merge
	echo "<hr>";
	$arrayCarros = array("Go", "Ferrari", "Ford Ka");
	$arrayMotos = array("Pop100", "Bros", "Cg 160" );

	$veiculos =  array_merge($arrayCarros, $arrayMotos);

	print_r($veiculos);

	// o array_pop irá excluir a ultima posição do errei
	echo "<hr>";
	//e dando um print no array_pop voce conseque saber qual elemento ele excluiu
	echo array_pop($arrayCarros);
	echo "<br>";
	print_r($arrayCarros);

	// array_shift já faz o inverso, exclui o primeiro elemento
	echo "<hr>";
	array_shift($arrayCarros);
	print_r($arrayCarros);

	// inserindo novos elementos no inicio do array respectivamente
  /*echo "<hr>";
	$frutas = array("Manga", "Maça", "Goiaba");
	print_r($frutas);
	array_unshift($frutas, "Acerola", "Abacate", "Caju" );
	echo "<br>";
	print_r($frutas); */

	// Já o array_push inserimos no final so array 
	echo "<hr>";
	$frutas = array("Manga", "Maça", "Goiaba");
	print_r($frutas);
	array_push($frutas, "Acerola", "Abacate", "Caju" );
	echo "<br>";
	print_r($frutas);

	// combinando dois arrays, tranformando um em indice e outro em valores
	echo "<hr>";
	$keys = array("Vasco", "Flamengo", "Botafogo");
	$valores = array("Campeao", "Vice", "Terceiro");

	$times = array_combine($keys, $valores);

	print_r($times);

	//array que soma seus valores
	echo "<hr>";
	$numeros = array(10,15,12,14);
	echo "Valor da soma: ";
	echo array_sum($numeros);

	// array explode serve pra transformar uma string em array
	echo "<hr>";
	$data = "11/01/2021";
	$novaData = explode("/", $data);

	print_r($novaData);

	//transformar um array em uma string
	echo "<hr>";
	$nomes = array("Carlos", "Neusa", "Maria", "José");
	$string =  implode(', ', $nomes);

	echo $string;


?>