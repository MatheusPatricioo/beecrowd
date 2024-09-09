<?php
// cd Documentos/GitHub/beecrowd
// php nomeDoArquivo.php


$numero1 = floatval(fgets(STDIN));
$numero2 = floatval(fgets(STDIN));

$media = (($numero1 * 3.5) + ($numero2 * 7.5)) / 11;


echo "MEDIA = " . number_format($media, 5, '.', '') . "\n";

?>