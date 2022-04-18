<?php
//public function __construct ($dsn, $username = null, $passwd = null, $options = null) {}
$_dbname = "danilonb_mysql-dbphphcode";
$_host = "localhost";
$username = "root";
$passwd = "123456";
$dsn = "mysql:dbname=$_dbname;host=$_host";
$conn = new PDO($dsn, $username, $passwd);
//var_dump($conn);

$query = "SELECT * FROM tb_usuarios";
$statement = $conn->prepare($query);
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
// var_dump($results);
//echo json_encode($results);
foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>". $key .":</strong>". $value ."<br>";
	}
	echo "<hr>";
}

?>
