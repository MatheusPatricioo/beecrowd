<?php

$nome_treinador = fgets(STDIN);
$nome_treinador = trim($nome_treinador);
echo "Bem vindo à batalha pokemon, " . $nome_treinador . "!\n";
sleep(2); // Aguarda 2 segundos para visualizar a mensagem
system('cls');
echo "Novo comando: escolha seu pokemon.\n";
sleep(1);


$pokemon1 = [$hp = 100, $atk = 30, $nome = "Charmander"];
$pokemon2 = [$hp = 100, $atk = 30, $nome = "Bulbasaur"];
$pokemon3 = [$hp = 100, $atk = 30, $nome = "Squartle"];
$boss = [$hp = 120, $atk = 20, $nome = "Pikachu"];

$pokemons = [$pokemon1, $pokemon2, $pokemon3];

for ($i = 0; $i < count($pokemons); $i++) {
    echo $i . " - " . $pokemons[$i][2] . "\n";
}

echo "Digite o número do Pokémon desejado: ";
$escolha = intval(fgets(STDIN));


if ($escolha >= 0 && $escolha < count($pokemons)) {
    $pokemonEscolhido = $pokemons[$escolha];
    
    sleep(1);
    system('cls');
    
    echo "Você escolheu o " . $pokemonEscolhido[2] . "!\n";
    echo "Status do Pokémon: HP = " . $pokemonEscolhido[0] . ", ATK = " . $pokemonEscolhido[1] . "\n";
} else {
    echo "Opção inválida. Por favor, escolha um número entre 0 e " . (count($pokemons) - 1) . ".\n";
}

sleep(1);
system('cls');

do {
    echo 'Deseja batalhar? (s/n): ';
    $batalhar = strtolower(trim(fgets(STDIN)));  // Lê a entrada e converte para minúsculas

    if ($batalhar !== 's' && $batalhar !== 'n') {
        echo "Resposta inválida. Por favor, responda com 's' para sim ou 'n' para não.\n";
    }
} while ($batalhar !== 's' && $batalhar !== 'n');  // Continua perguntando até receber "s" ou "n"


if ($batalhar == 's') {
    echo 'Prepare-se, a batalha vai começar!';
} else {
    echo 'Batalha cancelada.';
}
