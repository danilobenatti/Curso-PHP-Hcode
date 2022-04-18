<?php
$valorProduto = 14500.00;
$desconto = 5; // 5% de desconto em programação é * 0.05, para isso divida esse valor por 100.

if ($valorProduto > 10000) {
	$valorProduto = $valorProduto - ($valorProduto * ($desconto/100));
}
echo '<br>', $valorProduto;
?>
