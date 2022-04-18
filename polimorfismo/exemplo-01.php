<?php
abstract class Animal {
	
	public function falar() {
		return "Som";
	}

	public function mover() {
		return "Andar";
	}
}

class Cachorro extends Animal {
	
	public function falar() {
		return "AuAuAuAu...";
	}
}

class Gato extends Animal {
	
	public function falar() {
		return "Miaaauuu...";
	}

	public function mover() {
		return "Pular e " . parent::mover();
	}
}

class Peixe extends Animal {
	
	public function falar() {
		return "GloobGloob...";
	}

	public function mover() {
		return "Nadar";
	}
}

class Passaro extends Animal {

	public function falar() {
		return "Eu acho que vi um gatinho!";
	}

	public function mover() {
		return "Voar e " . parent::mover();
	}
}

$pluto = new Cachorro();
echo $pluto->falar() . '<br>';
echo $pluto->mover() . '<br>';
echo '<hr>';

$marie = new Gato();
echo $marie->falar() . '<br>';
echo $marie->mover() . '<br>';
echo '<hr>';

$nemo = new Peixe();
echo $nemo->falar() . '<br>';
echo $nemo->mover() . '<br>';
echo '<hr>';

$nemo = new Passaro();
echo $nemo->falar() . '<br>';
echo $nemo->mover() . '<br>';
echo '<hr>';
?>
