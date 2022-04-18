<?php namespace upload; echo $_SERVER['PHP_SELF'] . '<hr>';?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
<meta charset="UTF-8">
<title>Upload de um arquivo</title>
</head>
<body>
	<div class="container">
		<form method="POST" enctype="multipart/form-data">
			<label for="fileupload">Adicione um arquivo de imagem:</label>
			<input type="hidden" name="MAX_FILE_SIZE" value="201237">
			<input type="file" id="fileupload" name="file" required="required" title="Somente extenções jpg, gif, png, bmp, tiff">
			<button type="submit">Enviar</button>
		</form>
	</div>
</body>
</html>

<?php
include_once '../upload/UploadException.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
	$dirUploads = "uploads/";
	$allowedFileExtensions = array('jpg', 'gif', 'png', 'bmp', 'tiff');
	
	if (!is_dir($dirUploads)) {
		mkdir($dirUploads);
	}
	
	if (isset($_FILES['file'])) {
		$file = $_FILES['file'];
		if ($file["error"]) {
			throw new \UploadException($_FILES['file']['error']);
		}
		
		$fileName = $file["tmp_name"];
		$destination = $dirUploads . DIRECTORY_SEPARATOR . $file['name'];
		
		$fileType = explode("/", $file['type']);
		$fileExt = end($fileType);
		
		if (in_array($fileExt, $allowedFileExtensions)) {
			if ($file["error"] === UPLOAD_ERR_OK) {
				move_uploaded_file($fileName, $destination);
				echo "Upload realizado com sucesso!";
			} else {
				throw new \UploadException($file["error"]);
			}
		} else {
			throw new \UploadException($file["error"] = UPLOAD_ERR_EXTENSION);
		}
	} else {
		echo "Necessário um arquivo para upload!";
	}
}
?>
