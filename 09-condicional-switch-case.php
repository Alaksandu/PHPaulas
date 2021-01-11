<?php  
	// COndicional Switch Case
	
	$cor = "vermelho";

	switch ($cor) {
		# casos possiveis
		case 'vermelho':
			echo "Sua cor preferida é o vermelho";

			break;
		case 'azul':
			echo "Sua cor preferida é o azul";

			break;
		case 'amarelo':
			echo "Sua cor preferida é o amarelo";

			break;

		# padrão caso não entre em nenhum caso definido
		default:
			echo "Valor não reconhecido!";
			
			break;
	}
?>