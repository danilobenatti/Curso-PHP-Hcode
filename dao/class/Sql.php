<?php
class Sql extends PDO {

	private $conn;

	public function __construct() {
		$_dbname = "danilonb_mysql-dbphphcode";
		$_host = "localhost";
		$username = "root";
		$passwd = "123456";
		$dsn = "mysql:host=$_host;dbname=$_dbname";
		$this->conn = new PDO($dsn, $username, $passwd);
	}

	private function setParams($statement, $params = array()) {
		foreach ($params as $key => $value) {
			$this->setParam($statement, $key, $value);
		}
	}

	private function setParam($statement, $key, $value) {
		$statement->bindParam($key, $value);
	}

	public function query($rawQuery, $params = array()) {
		$statement = $this->conn->prepare($rawQuery);
		$this->setParams($statement, $params);
		$statement->execute();
		return $statement;
	}

	public function select($rawQuery, $param = array()): array {
		$statement = $this->query($rawQuery, $param);
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}
}
?>
