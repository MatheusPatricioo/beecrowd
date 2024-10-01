<?php

$produtos = [];

// Coleta 8 valores de produtos
for ($i = 0; $i < 8; $i++) {
    echo "Digite o valor do produto " . ($i + 1) . ": ";  
    $produto = (float) readline();
    $produtos[] = $produto;
}

// Calcula a soma e a média dos produtos
$soma = array_sum($produtos);
$media = $soma / 8;  // Ajustado para dividir por 8, já que são 8 produtos

// Exibe a soma e a média
echo "A soma dos produtos é: " . $soma . "\n";
echo "A média dos produtos é: " . $media . "\n";

// Exibe os produtos que estão acima da média
echo "Produtos acima da média: ";
foreach ($produtos as $produto) {
    if ($produto > $media) {
        echo $produto . " ";
    }
}
echo "\n";

?>
