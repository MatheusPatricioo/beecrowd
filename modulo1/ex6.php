<?php
// Lê a primeira linha da entrada
list($p1, $numero1, $valor1) = explode(' ', '13 2 15.30');

// Lê a segunda linha da entrada
list($p2, $numero2, $valor2) = explode(' ', '161 4 5.10');

// Calcula o valor total
$total = ($numero1 * $valor1) + ($numero2 * $valor2);

// Imprime o resultado formatado
echo "VALOR A PAGAR: R$ " . number_format($total, 2, '.', '') . "\n";
?>