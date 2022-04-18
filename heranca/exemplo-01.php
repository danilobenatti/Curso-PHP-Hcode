<?php
require_once '../poo/validacao_cpf.php';

class Documento {

	private $numero;

	public function getNumero() {
		return $this->numero;
	}

	public function setNumero($numero) {
		$this->numero = $numero;
	}
}

class Cpf extends Documento {

	public function validar($num): bool {
		$_result = validaCpf($num);
		if ($_result === FALSE) {
			throw new Exception("CPF Inválido!", 1);
		}
		return $_result;
	}
}

$doc = new Cpf();
$doc->setNumero("56326971004"); // CPF number by 4dev.com.br
var_dump($doc->validar($doc->getNumero()));
echo '<br>' . $doc->getNumero();
?>
