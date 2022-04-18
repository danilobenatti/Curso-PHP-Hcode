<?php
require_once 'validacao.php';

class Documento {

	private $numero;

	public function getNumero(): string {
		return $this->numero;
	}

	public function setNumero($numero) {
		$_result = validarCpf($numero);
		if ($_result === FALSE) {
			throw new Exception("CPF Inválido!", 1);
		}
		$this->numero = $numero;
	}
}

$_cpf = new Documento();
$_cpf->setNumero("22928060022"); //CPF válido: 22928060022 fonte: 4devs.com.br
var_dump($_cpf->getNumero());

echo '<br>';
var_dump(validarCpf("22928060022"));

?>
