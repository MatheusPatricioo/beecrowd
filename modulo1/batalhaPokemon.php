<?php

$nome_treinador = fgets(STDIN);
$nome_treinador = trim($nome_treinador);
echo "Bem vindo à batalha pokemon, " . $nome_treinador . "!\n";
sleep(2); // Aguarda 2 segundos para visualizar a mensagem
system('cls');
echo "Novo comando: escolha seu pokemon.\n";
sleep(1);

$pk1 = "Charmander";
$pk2 = "Bulbasaur";
$pk3 = "Squartle";
$pk1 = trim($pk1);
$pk2 = trim($pk2);
$pk3 = trim($pk3);
echo  "1: ". $pk1 . "\n";
echo  "2: ".$pk2 . "\n";
echo  "3: ".$pk3 . "\n";

echo "Digite o número do Pokémon desejado: ";
$escolha = intval(fgets(STDIN));

if ($escolha == 1) {
    echo "Você escolheu o Charmander";
} elseif ($escolha == 2) {
    echo "Você escolheu o Bulbasaur";
} elseif ($escolha == 3) {
    echo "Você escolheu o Squirtle";
} else {
    echo "Opção inválida.";
}

?>