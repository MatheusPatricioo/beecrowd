<?php
$temperaturas = [];  // Nome da variável ajustado para ser plural

// Coleta das temperaturas
for ($i = 0; $i < 10; $i++) {
    echo "Digite a temperatura em Celsius " . ($i + 1) . ": ";
    $temp = (float) readline();
    $temperaturas[] = $temp;
}

// Calcula a média das temperaturas
$media = array_sum($temperaturas) / count($temperaturas);
echo "A média das temperaturas é: " . $media . "\n";

// Exibe as temperaturas e quais estão abaixo da média
foreach ($temperaturas as $temp) {
    echo "Temperatura: " . $temp . "\n";
    if ($temp < $media) {
        echo "Essa temperatura está abaixo da média: " . $temp . "\n";
    }
}

// Função de Insertion Sort para ordenar o array
function insertionSort(&$array) {
    $n = count($array);  // Número de elementos no array
    for ($i = 1; $i < $n; $i++) {
        $key = $array[$i];  // Pega o elemento atual para ser inserido na parte ordenada
        $j = $i - 1;

        // Move os elementos maiores que o 'key' uma posição à frente
        while ($j >= 0 && $array[$j] > $key) {
            $array[$j + 1] = $array[$j];  // Move o elemento para a direita
            $j = $j - 1;  // Vai para o elemento anterior
        }

        // Insere o 'key' na posição correta
        $array[$j + 1] = $key;
    }
}

// Ordena o array usando Insertion Sort
insertionSort($temperaturas);

// Após a ordenação, o menor é o primeiro e o maior é o último
$menor = $temperaturas[0];  // Primeiro elemento após a ordenação
$maior = $temperaturas[count($temperaturas) - 1];  // Último elemento após a ordenação

echo "A menor temperatura é: " . $menor . "\n";
echo "A maior temperatura é: " . $maior . "\n";
