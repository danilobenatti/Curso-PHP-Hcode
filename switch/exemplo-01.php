<?php
date_default_timezone_set('America/Sao_Paulo');

$diaDaSemana = date("w");
echo '<br>', $diaDaSemana;

switch ($diaDaSemana) {
	case 0:
		echo '<br>', "Domingo";
	break;
	case 1:
		echo '<br>', "Segunda-feira";
	break;
	case 2:
		echo '<br>', "Terça-feira";
	break;
	case 3:
		echo '<br>', "Quarta-feira";
	break;
	case 4:
		echo '<br>', "Quinta-feira";
	break;
	case 5:
		echo '<br>', "Sexta-feira";
	break;
	case 6:
		echo '<br>', "Sábado";
	break;
	
	default:
		echo '<br>', "Data Inválida!";
	break;
}

?>
