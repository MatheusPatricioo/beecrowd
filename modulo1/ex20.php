<?php

$pnt_Combate = [];
$pnt_estrategia = [];
$nomes = [];

for ($i = 0; $i < 3; $i++) {
    echo "Digite o nome dos ninjas " . ($i + 1) . ": ";
    $nome = trim(readline());
    $nomes[] = $nome;

    echo "Digite a pontuação de combate " . ($i + 1) . ": ";
    $combate = (float) readline();
    $pnt_Combate[] = $combate;

    echo "Digite a pontuação de estratégia para o ninja " . $nome . ": ";
    $estrategia = (float) readline();
    $pnt_estrategia[] = $estrategia;
}

// Ordena os arrays: primeiro por combate e em caso de empate por estratégia
array_multisort($pnt_Combate, SORT_ASC, $pnt_estrategia, SORT_ASC, $nomes);

echo "\nResultado após ordenação por combate e estratégia:\n";

// Exibir o ranking final dos ninjas
foreach ($nomes as $index => $nome) {
    echo "Ninja: " . $nome . " - Pontuação de Combate: " . $pnt_Combate[$index] . " - Pontuação de Estratégia: " . $pnt_estrategia[$index] . "\n";
}


$menor1 = min($pnt_Combate);
$maior1 = max($pnt_Combate);
$menor2 = min($pnt_estrategia);
$maior2 = max($pnt_estrategia);
 

echo "\nMenor pontuação em combate: " . $menor1 . "\n";
echo "Maior pontuação em combate: " . $maior1 . "\n";
echo "Menor pontuação em estratégia: " . $menor2 . "\n";
echo "Maior pontuação em estratégia: " . $maior2 . "\n";

?>
 