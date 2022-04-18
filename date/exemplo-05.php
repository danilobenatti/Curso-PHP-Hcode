<?php
$_datetime = new DateTime();
echo '<br>' . $_datetime->format('d/m/Y H:i:s');

$interval= new DateInterval("P15D");

$_datetime->add($interval);

echo '<br>' . $_datetime->format('d/m/Y H:i:s');
?>
