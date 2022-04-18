<?php

$data = array(
	"empresa"=>"Hcode Treinamentos"
);

//setcookie(string $name, string $value=null, int $expires=null, string $path=null, string $domain=null, bool $secure=null, bool $httponly=null) : bool 
$expire = time() + 3600; // 1hora
setcookie("NOME_DO_COOKIE", json_encode($data), $expire);
echo "OK!";
?>
