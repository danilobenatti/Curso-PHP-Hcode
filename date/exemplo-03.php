<?php
$_locale = ['pt_BR', 'pt_BR.utf-8', 'portuguese'];
setlocale(LC_ALL, $_locale);

$_format = "%A, %d - %B - %Y";
echo ucwords(strftime($_format));
?>
