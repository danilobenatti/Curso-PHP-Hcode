<?php
$condition = TRUE;

while ($condition) {
	
	$numero = rand(1, 10);
	echo '<br>', $numero;
	
	if ($numero === 3) {
		echo " => Achou o TRÊS!!!";
		$condition = FALSE;
	}
}
?>
