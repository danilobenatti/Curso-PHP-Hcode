<?php

namespace Cliente;

class Cadastro extends \Cadastro {

	public function registrarVenda() {
		return "Foi registrada uma venda para o cliente " . $this->getNome();
	}
}
?>
