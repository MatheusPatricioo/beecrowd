<?php

$texto = fgets(STDIN);
$texto = trim($texto);

// PRIMEIRA PASSADA: Deslocar letras 3 posições para a direita na tabela ASCII
for ($i = 0; $i < strlen($texto); $i++) {
    if (ctype_alpha($texto[$i])) {  // Verifica se é uma letra (maiúscula ou minúscula)
        $ascii = ord($texto[$i]);
        $novo_ascii = $ascii + 3;
        $texto[$i] = chr($novo_ascii);  // Substitui o caractere original
    }
}

$texto_invertido = strrev($texto);

$metade_tamanho = intdiv(strlen($texto_invertido), 2);
for ($i = $metade_tamanho; $i < strlen($texto_invertido); $i++) {
    $ascii = ord($texto_invertido[$i]);
    $novo_ascii = $ascii - 1;
    $texto_invertido[$i] = chr($novo_ascii);  // Substitui o caractere
}

echo $texto_invertido . "\n";
