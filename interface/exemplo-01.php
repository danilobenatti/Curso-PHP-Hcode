<?php
interface Veiculo {

	public function acelerar($velocidade);

	public function frenar($velocidade);

	public function trocarMarcha($marcha);
}

class Civic implements Veiculo {

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

$carro = new Civic();
echo $carro->trocarMarcha(1) . '<br>';
?>
