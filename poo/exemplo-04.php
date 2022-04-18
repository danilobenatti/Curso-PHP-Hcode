<?php
class Endereco {

	private $_logradouro;

	private $_numero;

	private $_bairro;

	private $_cidade;

	private $_cep;

	public function __construct($logradouro, $numero, $bairro, $cidade, $cep) {
		$this->_logradouro = $logradouro;
		$this->_numero = $numero;
		$this->_bairro = $bairro;
		$this->_cidade = $cidade;
		$this->_cep = $cep;
	}

	public function __destruct() {
		var_dump("Destroy!");
	}

	public function __toString() {
		return $this->_logradouro . ", " . $this->_numero . ", " . $this->_bairro . ", " . $this->_cidade . ", " . $this->_cep;
	}
}
$endereco1 = new Endereco("Rua Ademar Saraiva Leão", "123", "Centro", "Santos", "12345-000");
var_dump($endereco1);
echo '<hr>' . $endereco1 . '<hr>';
unset($endereco1);
?>
