<?php
require_once 'exemplo-01.php';

class Programador extends Pessoa {
	
	public function verDados() {
		echo '<br>' . get_class($this);
		echo '<br>' . $this->_nome;
		echo '<br>' . $this->_idade;
		echo '<br>' . $this->_senha;
	}
}

$_obj = new Programador();
echo '<br>' . $_obj->verDados();
?>
