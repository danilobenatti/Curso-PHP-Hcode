<form>
<label for="qtdSalario">Nº de Salários:</label>
<input type="number" id="qtdSalario" name="qtdSalario">
<input type="submit" value="OK">
</form>
<?php
define('SALARIO_MINIMO', 1212.00);

function salarioMinimo() {
	return 1212.00;
}

if (isset($_GET)) {
	$qtdSalario = $_GET ? $_GET["qtdSalario"] : 0;
	$salario = SALARIO_MINIMO * $qtdSalario;
}

// Informa as configurações locais que serão usadas na formatação.
// https://www.php.net/manual/pt_BR/function.setlocale.php
setlocale(LC_ALL, 'pt_BR');
/**
 * Formata como moeda um valor de acordo com as informações locais.
 * @param float $value valor que será formatado
 * @return string
 */
function currency(float $value): string {
	$fmt = new NumberFormatter(setlocale(LC_MONETARY, null), NumberFormatter::CURRENCY);
	$locale = localeconv();
	return $fmt->formatCurrency($value, $locale['int_curr_symbol']);
}

if (isset($salario) && $salario != 0) {
	echo '<br>', "José recebeu $qtdSalario salário(s): " . currency($salario);
	echo '<br>', currency($salario); // Retorna R$ 3.636,00
}

?>
