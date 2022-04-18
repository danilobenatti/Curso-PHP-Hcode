<?php
$conn = new mysqli("localhost", "root", "123456", "danilonb_mysql-dbphphcode");

if ($conn->connect_error) {
	echo "Error: " . $conn->connect_error;
}
$query = "SELECT * FROM tb_usuarios";
$result = $conn->query($query);

$data = array();

while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
	array_push($data, $row);
}

echo json_encode($data);

?>
