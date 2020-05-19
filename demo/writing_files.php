<?php

$file = "example.txt";

if($handle = fopen($file, 'w')) {
	fwrite($handle, 'Like PHP');
	fclose($handle);
} else {
	echo "The files could not be written";
}


?>