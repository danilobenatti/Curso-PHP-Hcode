<?php
$filename = "usuarios.csv";

if (file_exists($filename)) {
	
	$file = fopen($filename, "r");
	
	$headers = explode(";", fgets($file));
	
	$headers = preg_replace("!\\r?\\n!", "", $headers);
	
	$data = array();
	
	while ($row = fgets($file)) {
		$rowData = explode(";", $row);
		$line = array();
		for ($i = 0; $i < count($headers); $i++) {
			$line[$headers[$i]] = $rowData[$i];
			$line[$headers[$i]] = preg_replace("!\\r?\\n!", "", $line[$headers[$i]]);
		}
		array_push($data, $line);
	}
	
	fclose($file);
	
	echo json_encode($data);
	
}

?>