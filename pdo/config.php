<?php
$_dbname = "danilonb_mysql-dbphphcode";
$_host = "localhost";
$username = "root";
$passwd = "123456";
$dsn = "mysql:host=$_host;dbname=$_dbname";
$conn = new PDO($dsn, $username, $passwd);
?>