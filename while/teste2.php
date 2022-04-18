<?php
/*
 * Como podemos aplicar uma regra onde se a variável $status for verdadeira, 
 * a variável $liberado receba o valor 1, senão $liberado deve receber 0 ?
 */

$status = TRUE;

if ($status) {
	$liberado = 1;
	return $liberado;
} else {
	$liberado = 0;
	return $liberado;
}

?>
