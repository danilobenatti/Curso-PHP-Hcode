<?php
$_dbname = "danilonb_mysql-dbphphcode";
$_host = "localhost\SQLEXPRESS;ConnectionPooling=0";
$username = "sa";
$passwd = "123456";
$dsn = "sqlsrv:Database=$_dbname;server=$_host";
$conn = new PDO($dsn, $username, $passwd);

$query = "SELECT * FROM tb_usuarios";
$statement = $conn->prepare($query);
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);

?>
