<?php
function ola($str1 = "Mundo", $str2 = "Bom dia") {
	return "Olá $str1! $str2";
}
echo ola(), '<br>';
echo ola("", "Boa noite"), '<br>';
echo ola("José"), '<br>';
echo ola("Maria", "Boa tarde"), '<br>';
echo ola("João", ""), '<br>';
?>
