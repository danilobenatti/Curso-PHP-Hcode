<?php
/*
 * A "for" loop update clause should move the counter in the right direction (php:S2251)
 */
for ($i = 0; $i < 10; $i--) {
	echo $i;
}
?>
