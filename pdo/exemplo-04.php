<?php
include_once '../pdo/config.php';

$script = "UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :SENHA WHERE id = :ID";
$statement = $conn->prepare($script);

$_id = 4;
$_login = "tester";
$_senha = "7891011";

$statement->bindParam(":ID", $_id);
$statement->bindParam(":LOGIN", $_login);
$statement->bindParam(":SENHA", $_senha);

$statement->execute();

echo "Dados alterados OK!";

?>
