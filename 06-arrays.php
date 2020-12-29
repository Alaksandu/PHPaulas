<?php  

	// Arrays 

	$carros = array(0=>"BMW", 1=>"Ferrari", 2=>"Mclaren");
	$cidades = array('0' => "Joao Pessoa", '1' => "RIo de Janeiro", '2' => "Sao Paulo" );
	$clientes = ["Bia", "Virginia", "Hugo"];
	//inserindo 

	$carros[] = "Camaro";
	$carros[4] = "Amarok";

	print_r($carros);
	echo '<br>';
	print_r($cidades);
	echo ('<br>');
	print_r($clientes);

	echo '<br>';
	echo count($carros);

	//foreach

	echo '<hr>';

	foreach ($carros as $valor) {
		
		echo $valor.'<br>';
	}

	// array associativo

	$pessoa = array("nome" => "Alexandre", "idade" => 26, "altura" => 1.83);
	echo $pessoa["idade"];
	echo "<hr>";

	$pessoa["cidade"] = "João Pessoa";

	print_r($pessoa);

	echo "<hr>";

	foreach ($pessoa as $key => $value) {
		
		echo $key.": ".$value."<br>";
	}

	echo "<hr>";

	$municipios = array( 
						"Paulistas" => array("Primeiro"=> "São Bernardo do Campo", "Segundo"=> "Guarulhos", "Terceiro"=> "São Paulo", "Quarto"=> "Osasco"),	
						 "Cariocas" => array("Rio de Janeiro", "São Gonçalo", "Nitéroi", "Macaé"),
						 "Paraibense" => array("João Pessoa", "Campina Grande", "Sousa", "Bayeux")
						);

	echo $municipios["Paraibense"][0];

	echo "<br>";
	echo "<br>";

	foreach ($municipios["Paulistas"] as $key => $value) {
			
			echo $key.": ".$value."<br>";
	}

?>