<?php
include_once '../pdo/config.php';

$script = "INSERT INTO tb_usuarios (deslogin, dessenha) VALUE (:LOGIN, :SENHA)";
$statement = $conn->prepare($script);

$_login = "cutomer";
$_senha = "123456";

$statement->bindParam(":LOGIN", $_login);
$statement->bindParam(":SENHA", $_senha);

$statement->execute();

echo "Inserido OK!";

?>
