<?php
// Vetor para armazenar as notas
$notas = [];

// Entrada de dados - Laço para receber as notas dos alunos
for ($i = 0; $i < 5; $i++) {
    echo "Digite a nota do aluno " . ($i + 1) . ": ";
    $nota = (float) readline();
    $notas[] = $nota; // Adiciona a nota ao vetor
}

// Cálculo da média
$soma = array_sum($notas);
$media = $soma / count($notas);
echo "Média da turma: " . $media . "\n";

// Notas acima da média
echo "Notas acima da média: ";
foreach ($notas as $nota) {
    if ($nota > $media) {
        echo $nota . " ";
    }
}
echo "\n";

// Maior e menor nota
echo "Maior nota: " . max($notas) . "\n";
echo "Menor nota: " . min($notas) . "\n";
?>
