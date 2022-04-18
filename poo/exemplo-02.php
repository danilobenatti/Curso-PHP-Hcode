<?php
class Carro {
	
	private $marca;
	
	private $modelo;
	
	private $motor;
	
	private $ano;
	
	public function getMarca() {
		return $this->marca;
	}
	
	public function setMarca($marca) {
		$this->marca = $marca;
	}
	
	public function getModelo() {
		return $this->modelo;
	}
	
	public function setModelo($motor) {
		$this->modelo = $motor;
	}
	
	public function getMotor():float {
		return $this->motor;
	}
	
	public function setMotor($motor) {
		$this->motor = $motor;
	}
	
	public function getAno():int {
		return $this->ano;
	}
	
	public function setAno($ano) {
		$this->ano = $ano;
	}
	
	public function exibir() {
		return array(
			"marca" => $this->getMarca(),
			"modelo" => $this->getModelo(),
			"motor" => $this->getMotor(),
			"ano" => $this->getAno()
		);
	}
}

$_gol = new Carro();
$_gol->setMarca("Volkswagen");
$_gol->setModelo("Gol GT");
$_gol->setMotor("1.6");
$_gol->setAno("2005");

print_r($_gol->exibir());
echo '<br>';
var_dump($_gol);
echo '<br>';
var_dump($_gol->exibir());
?>
