<?php  

	$nome = 'Alexandre';
	$idade = '26';
	$altura = '1.83';

	echo "meu nome é  $nome, minha idade é $idade e minha altura é $altura";
	echo "<br>";

	// variável dinâmica

	$destino = 'cidade';
	$$destino = 'João Pessoa';

	echo "O primeiro lugar é alguma $destino";
	echo "<br>";
	echo "O segundo lugar é $cidade";

	// é capacidade de transformar um valor de uma variável em uma variável.

?>