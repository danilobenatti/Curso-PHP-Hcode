<?php
/*
 * Comentários em bloco.
 */
$anoNascimento = 1982;
$nomeCompleto = "José Batista";
//Na linha de baixo temos uma variável com número no nome.
$nome1 = 'José';
$sobreNome = 'Batista';
$nomeCompleto = $nome1 . ' ' . $sobreNome;
echo '<br>', $nomeCompleto;
exit();
echo $nome1;
echo '<br>';
unset($nome1, $nomeCompleto);
if (isset($nome1)) {
	echo $nome1;
}

?>
