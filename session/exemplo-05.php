<?php
//require_once 'config.php';

echo '<br>', session_save_path();
echo '<br>', session_status();

switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo '<br>' . "Sessões desabilitadas.";
	break;
	case PHP_SESSION_NONE:
		echo '<br>' . "Sessões habilitadas, mas nenhuma existir.";
	break;
	case PHP_SESSION_ACTIVE:
		echo '<br>' . "Sessões habilitadas, e uma existir";
	break;
	
	default:
		echo '<br>' . "NULL";
	break;
}
?>
