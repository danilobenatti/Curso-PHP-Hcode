<?php
$conn = new mysqli("localhost", "root", "123456", "danilonb_mysql-dbphphcode");

if ($conn->connect_error) {
	echo "Error: " . $conn->connect_error;
}

$query = "INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)";
$statement = $conn->prepare($query);

$login = "admin";
$senha = "123456";
$statement->bind_param("ss", $login, $senha);
$statement->execute();

$login = "user";
$senha = "654321";
$statement->execute();

$login = "guest";
$senha = "010101";
$statement->execute();

?>
