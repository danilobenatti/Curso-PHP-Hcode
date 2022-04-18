<?php
require_once '../namespace/config.php';

use Cliente\Cadastro;

$cadastro = new Cadastro();
$cadastro->setNome("Djalma Sindeaux");
$cadastro->setEmail("djalma@hcode.com.br");
$cadastro->setSenha("123456");

echo $cadastro . '<br>';

echo $cadastro->registrarVenda() . '<br>';

?>
