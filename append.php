<?php
$file = 'test.txt';
$current = file_get_contents($file);
$current .= "test\n";
file_put_contents($file, $current);
?>
