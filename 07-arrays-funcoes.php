<?php  
	// ALgumas funções arrays, outras podem ser encontradas na documentação do php
	
	$nomes = array("Filho"=>"Alexandre", "Filha"=>"Alessandra", "Mãe"=>"Virginia", "Pai"=>"Severino");

	if(is_array($nomes)){

		echo "É um array";
	} else {
		echo "Não é um array";
	}

	echo "<br>";

	echo in_array("Alexandre", $nomes);
	// ele retorna true ou false se tem o valor naquele array

	$indices = array_keys($nomes);
	echo "<hr>";
	print_r($indices);

	// Ele cria um array com os indices de um outro array


?>