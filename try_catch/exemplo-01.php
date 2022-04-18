<?php
namespace try_catch;
try {
	throw new \UnexpectedValueException("Valor inesperado, informe valor corretor!", 400);
} catch (\Exception $e) {
	$value = array(
			"code"=>$e->getCode(),
			"message"=>$e->getMessage(),
			"file"=>$e->getFile(),
			"line"=>$e->getLine()
	);
	echo json_encode($value);
}
?>
