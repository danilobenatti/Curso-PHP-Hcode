<?php namespace upload_ftp; echo $_SERVER['PHP_SELF'] . '<hr>';?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
<meta charset="UTF-8">
<title>FTP Upload</title>
</head>
<body>
	<h2>Upload de um arquivo para um área de FTP</h2>
	<form method="post" action="#" enctype="multipart/form-data">
	<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
	<label for="host">Hostname:</label>
	<input type="text" name="hostname" id="host"><p/>
	<label for="user">Username:</label>
	<input type="text" name="username" id="user"><p/>
	<label for="pass">Password:</label>
	<input type="password" name="password" id="pass"><p/>
	<label for="dir">Destination Directory:</label>
	<input type="text" name="directory" id="dir"><p/>
	<label for="file">File:</label>
	<input type="file" name="file" id="file"><p/>
	<input type="submit" name="submit" value="Upload File">
	</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
	// get FTP access parameters
	$host = $_POST['hostname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$destDir = $_POST['directory'];
	$workDir = sys_get_temp_dir();
	// get temporary file name for the uploaded file
	$tmpName = basename($_FILES['file']['tmp_name']);
	// copy uploaded file into current directory
	$filename = $_FILES['file']['tmp_name'];
	$destination = $workDir . DIRECTORY_SEPARATOR . $tmpName;
	move_uploaded_file($filename, $destination) or die("Cannot move uploaded file to working directory");
	// open connection
	$ftp_stream = ftp_connect($host) or die("Cannot initiate connection to host");
	// send access parameters
	ftp_login($ftp_stream, $username, $password) or die("Cannot login");
	// perform file upload
	$remote_file = $destDir . "/" . $_FILES['file']['name'];
	$local_file = $workDir . DIRECTORY_SEPARATOR . $tmpName;
	$upload = ftp_put($ftp_stream, $remote_file, $local_file, FTP_BINARY);
	// check upload status
	// display message
	if (!$upload) {
		echo "Cannot upload";
	} else {
		echo "Upload complete!";
	}
	// close the FTP stream
	ftp_close($ftp_stream);
	// delete local copy of uploaded file
	unlink($workDir . DIRECTORY_SEPARATOR . $tmpName) or die("Cannot delete uploaded file from working directory - manual deletion recommended");
}

?>
