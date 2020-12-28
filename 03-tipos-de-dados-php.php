<?php  
	// Escalares
	$nome = 'alexandre';

	var_dump($nome);
	if (is_string($nome)) {
		echo "É uma string";

	} else {
		echo "não é uma string";

		}

	echo "<hr>";

	// compostos

	$carrosEoutros = array('Gol', 'Ford', 'Ferrari',20, 16.6, true);
	var_dump($carrosEoutros);

	echo "<hr>";

	// classe e objeto

	//criando uma classe
	class Cliente {
		// Esse public no inicio, é um tipo de modificador de acesso
		public $nome;

		// metodo
		public function atribuirNome($nome){
			$this->$nome = $nome;	
		}
	}

	//instanciando o objeto da classe cliente

	$cliente = new Cliente();
	$cliente->atribuirNome('Alexandre');
	var_dump($cliente);

	echo "<hr>";

?>