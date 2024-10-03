<?php
$points = [];
$nomes = [];

// Coleta de dados
for ($i = 0; $i < 10; $i++) {
    echo "Digite o nome dos ninjas " . ($i + 1) . ": ";
    $nome = trim(readline());

    echo "Digite a pontuação de " . $nome . ": ";
    $temp = (float) readline();

    $points[] = $temp;
    $nomes[] = $nome;
}

// Verificação de pontuação abaixo de 5
foreach ($nomes as $index => $nome) {
    if ($points[$index] < 5) {
        echo "Está abaixo do mínimo para a próxima fase: " . $nome . "\n";
    }
}

// Função de ordenação usando insertion sort
function insertionSort(&$points, &$nomes)
{
    $n = count($points); // Número de elementos no array
    for ($i = 1; $i < $n; $i++) {
        $keyPoints = $points[$i]; // Pega a pontuação atual para ser inserida na parte ordenada
        $keyNomes = $nomes[$i]; // Pega o nome correspondente para mover junto
        $j = $i - 1;

        // Move os elementos maiores que o 'keyPoints' uma posição à frente
        while ($j >= 0 && $points[$j] > $keyPoints) {
            $points[$j + 1] = $points[$j];  // Move a pontuação para a direita
            $nomes[$j + 1] = $nomes[$j];    // Move o nome correspondente também
            $j = $j - 1;  // Vai para o elemento anterior
        }

        // Insere a pontuação e o nome na posição correta
        $points[$j + 1] = $keyPoints;
        $nomes[$j + 1] = $keyNomes;
    }
}

// Ordenar as pontuações e os nomes
insertionSort($points, $nomes);

// Exibir a menor e a maior pontuação
$menor = $points[0];
$maior = $points[count($points) - 1];

echo "\nMenor pontuação: " . $menor . "\n";
echo "Maior pontuação: " . $maior . "\n";

// Exibir a lista de pontuações ordenadas com os nomes
echo "\nPontuações ordenadas:\n";
foreach ($nomes as $index => $nome) {
    echo "Ninja: " . $nome . " - Pontuação: " . $points[$index] . "\n";
}
