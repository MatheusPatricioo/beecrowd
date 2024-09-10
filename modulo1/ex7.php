<?php
//ESFERA

$pi = 3.14159;
$r = floatval(fgets(STDIN));

$volume = (4.0 / 3) * $pi * ($r * $r * $r);
echo "VOLUME = " . number_format($volume, 3, '.', '') . "\n";

?>