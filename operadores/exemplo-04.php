<?php
$a = 55.0;
$b = 55;
var_dump($a > $b);
var_dump($a >= $b);
var_dump(!$a >= $b);
echo '<br>';
var_dump($a < $b);
var_dump($a <= $b);
var_dump($a <= !$b);
echo '<br>';
// var_dump($a = $b); // "=" atribui valor
// echo '<br>';
var_dump($a == $b);
echo '<br>';
var_dump($a === $b);
echo '<br>';
var_dump($a != $b);
echo '<br>';
var_dump($a !== $b);
echo '<br>';
?>
