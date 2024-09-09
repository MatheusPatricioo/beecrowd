<?php
// cd Documentos/GitHub/beecrowd
// php nomeDoArquivo.php


$notaA = doubleval(fgets(STDIN));
$notaB = doubleval(fgets(STDIN));
$notaC = doubleval(fgets(STDIN));

$media = (($notaA * 2.0) + ($notaB * 3.0) + ($notaC * 5.0)) / 10;


echo "MEDIA = " . number_format($media, 1, '.', '') . "\n";

?>