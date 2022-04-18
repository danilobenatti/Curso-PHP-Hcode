<?php
class Pessoa {

	public $_nome = "Rasmus Lerdorf";

	protected $_idade = 48;

	private $_senha = "123456";

	public function verDados() {
		echo '<br>' . $this->_nome;
		echo '<br>' . $this->_idade;
		echo '<br>' . $this->_senha;
	}
}
$_obj = new Pessoa();
echo '<br>' . $_obj->_nome . '<hr>';
//echo '<br>' . $_obj->_idade . '<hr>';
echo '<br>' . $_obj->verDados() . '<hr>';
?>
