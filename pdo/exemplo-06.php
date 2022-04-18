<?php
include_once '../pdo/config.php';

$conn->beginTransaction();

$script = "DELETE FROM tb_usuarios WHERE id = ?";
$statement = $conn->prepare($script);

$_id = 3;

$statement->execute(array($_id));

$conn->rollBack();
// $conn->commit();

echo "Dados apagados OK!";

?>
