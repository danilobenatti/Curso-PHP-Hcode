<?php
interface Veiculo {
	
	public function acelerar($velocidade);
	
	public function frenar($velocidade);
	
	public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo {
	
	public function acelerar($velocidade) {
		return "O veículo acelerou até {$velocidade}Km/h";
	}
	
	public function frenar($velocidade) {
		return "O veículo frenou até {$velocidade}Km/h";
	}
	
	public function trocarMarcha($marcha) {
		return "O veículo engatou a marcha {$marcha}";
	}
}

class DelRey extends Automovel {
	public function empurrar(){
		return "O veículo parou!";
	}
}

$carro = new DelRey();
echo $carro->acelerar(100) . '<br>';
echo $carro->empurrar() . '<br>';

?>
