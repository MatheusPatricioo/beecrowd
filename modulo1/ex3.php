<?php
// cd Documentos/GitHub/beecrowd
// php nomeDoArquivo.php


$valorA = doubleval(fgets(STDIN));
$valorB = doubleval(fgets(STDIN));
$valorC = doubleval(fgets(STDIN));
$valorD = doubleval(fgets(STDIN));

$ProdAB = (($valorA * $valorB));
$ProdCD = (($valorC * $valorD));


$DIFERENCA = ($ProdAB - $ProdCD);

echo "DIFERENCA = " . $DIFERENCA . "\n";

?>