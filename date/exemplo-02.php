<?php
$_str = "2001-09-11";

// $_time = strtotime($_str);
// $_time = strtotime("now");
// $_time = strtotime("+1 day");
$_time = strtotime("+1 week");

echo date("l, d/m/Y", $_time);
?>
