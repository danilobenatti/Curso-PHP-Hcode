<?php
namespace try_catch;

const MSG = "Nome informado está incorreto.";

function trataNome1($nome) {
	if (!$nome) {
		throw new \InvalidArgumentException(MSG, 404);
	};
	return ucfirst($nome) . '<br>';
}
function trataNome2($nome) {
	if (!isset($nome)) {
		throw new \InvalidArgumentException(MSG, 404);
	};
	return ucfirst($nome) . '<br>';
}
function trataNome3($nome) {
	if (empty($nome)) {
		throw new \InvalidArgumentException(MSG, 404);
	};
	return ucfirst($nome) . '<br>';
}

try {
	echo '<h3>Bloco(1): trataNome1 com !$nome</h3>';
	echo trataNome1("José");
	echo trataNome1("    ");
	echo trataNome1("Pedro");
	echo trataNome1("");
	echo trataNome1(NULL);
} catch (\Exception $e) {
	echo $e->getMessage();
} finally {
	echo "<br>Fim bloco (1)" .'<hr>';
}

try {
	echo '<h3>Bloco(2): trataNome2 com !isset($nome)</h3>"';
	echo trataNome2("José");
	echo trataNome2(" ");
	echo trataNome2(NULL);
	echo trataNome2("Pedro");
	echo trataNome2("");
} catch (\Exception $e) {
	echo $e->getMessage();
} finally {
	echo "<br>Fim bloco (2)" .'<hr>';
}

try {
	echo '<h3>Bloco(3): trataNome3 com empty($nome)</h3>"';
	echo trataNome3("José");
	echo trataNome3(" ");
	echo trataNome3(NULL);
	echo trataNome3("Pedro");
	echo trataNome3("");
} catch (\Exception $e) {
	echo $e->getMessage();
} finally {
	echo "<br>Fim bloco (3)" .'<hr>';
}

?>
