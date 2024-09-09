<?php
// cd Documentos/GitHub/beecrowd
// php nomeDoArquivo.php


$NUMBER = intval(fgets(STDIN));
$TIME = intval(fgets(STDIN));
$TIME_VALOR = floatval(fgets(STDIN));
//$SALARY = intval(fgets(STDIN));

$SALARY = (($TIME) * ($TIME_VALOR));

echo "NUMBER = " . $NUMBER . "\n";
echo "SALARY = U$ " . number_format($SALARY, 2, '.', '') . "\n";
?>