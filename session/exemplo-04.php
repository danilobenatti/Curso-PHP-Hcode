<?php
session_id("v3de2rq4da7snfviv1klmj7b98");

require_once 'config.php';

session_regenerate_id();

echo session_id();
echo '<br>';
var_dump($_SESSION);
?>