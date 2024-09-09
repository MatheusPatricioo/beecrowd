<?php
$nomeVendedor = fgets(STDIN); // Leitura do nome do vendedor
$salarioFixo = floatval(fgets(STDIN)); // Leitura do salário fixo
$vendasTotal = floatval(fgets(STDIN)); // Leitura do total de vendas

// Calcula a comissão de 15%
$comissao = $vendasTotal * 0.15;

// Calcula o salário total com a comissão
$salarioTotal = $salarioFixo + $comissao;

// Formata a saída com ponto como separador decimal
echo "TOTAL = R$ " . number_format($salarioTotal, 2, '.', '') . "\n";

?>