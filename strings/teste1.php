<?php

$name = 'Hcode Treinamentos';
echo $name;

$replace = 'Cursos';

$new_name = substr($name, 0, strpos($name, 'T')) . $replace;

echo '<br>', $new_name;

?>

