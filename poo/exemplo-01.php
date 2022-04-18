<?php
class Pessoa {

	public $nome;

	public function falar() {
		return "Meu nome é: " . $this->nome;
	}
}

$cliente = new Pessoa();
$cliente->nome = "João Carlos";
echo $cliente->falar();
?>
