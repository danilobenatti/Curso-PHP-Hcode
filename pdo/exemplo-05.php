<?php
include_once '../pdo/config.php';

$script = "DELETE FROM tb_usuarios WHERE id = :ID";
$statement = $conn->prepare($script);

$_id = 2;

$statement->bindParam(":ID", $_id);

$statement->execute();

echo "Dados apagados OK!";

?>
