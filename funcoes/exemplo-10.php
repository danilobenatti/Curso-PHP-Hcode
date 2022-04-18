<?php
function test($callback) {
	//Processo muito lento.
	$callback();
}

test(function(){
	echo "Terminou!";
});

?>
