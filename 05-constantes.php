<?php  
	
	// constantes

	define("NOME", "Alexandre");
	define(IDADE, 26);
	define(ALTURA, 1.83);
	define(ESTADO_CIVIL, "Solteiro");

	// Com arays

	define(TIMES, ['Vasco', 'Flamengo', 'Botafogo']);

	echo NOME;
	echo('<br>');
	echo(IDADE);
	echo('<br>');
	echo ALTURA;
	echo('<br>');
	echo ESTADO_CIVIL;
	echo '<br>';

	// outro modo de imprimir
	echo 'Meu nome: '.NOME.' Idade: '.IDADE.' Altura: '.ALTURA.' Estado Civil: '.ESTADO_CIVIL ;
	echo '<br>';
	echo TIMES;
	echo '<br>';

	var_dump(TIMES);
?>