<?php
$points = [];
$nomes = [];

for ($i = 0; $i < 10; $i++) {
    echo "Digite o nome dos ninjas " . ($i + 1) . ": ";
    $nome = trim(readline());

    echo "Digite a pontuação de " . $nome . ": ";
    $temp = (float) readline();

    $points[] = $temp; 
    $nomes[] = $nome;
}

