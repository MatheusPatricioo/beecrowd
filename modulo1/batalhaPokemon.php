<?php

$nome_treinador = fgets(STDIN);
$nome_treinador = trim($nome_treinador);
echo "Bem vindo à batalha pokemon, " . $nome_treinador . "!\n";
sleep(2);
system('cls');
echo "Novo comando: escolha seu pokemon.\n";
sleep(1);

$pokemon1 = [$hp = 100, $atk = 30, $nome = "Charmander"];
$pokemon2 = [$hp = 100, $atk = 30, $nome = "Bulbasaur"];
$pokemon3 = [$hp = 100, $atk = 30, $nome = "Squirtle"];
$boss = [$hp = 120, $atk = 20, $nome = "Pikachu"];

$pokemons = [$pokemon1, $pokemon2, $pokemon3];

for ($i = 0; $i < count($pokemons); $i++) {
    echo $i . " - " . $pokemons[$i][2] . "\n";  // Mostra os nomes dos Pokémons
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
    exit;
}

sleep(1);
system('cls');


do {
    echo 'Deseja batalhar? (s/n): ';


    $batalhar = strtolower(trim(fgets(STDIN)));

    if ($batalhar !== 's' && $batalhar !== 'n') {
        echo "Resposta inválida. Por favor, responda com 's' para sim ou 'n' para não.\n";
    }
} while ($batalhar !== 's' && $batalhar !== 'n');


if ($batalhar == 's') {
    echo "\n";
    echo "\n";
    echo 'Prepare-se, a batalha vai começar!' . "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    sleep(2);
    system('cls');
} else {
    echo 'Batalha cancelada.';
    exit;
}

echo 'Rival: ' . $boss[2] . ' Eu escolho você!! ' . "\n";
sleep(1);

while ($pokemonEscolhido[0] > 0 && $boss[0] > 0) {
    // Turno do Pokémon escolhido
    echo "=======================\n";
    echo "Seu Pokémon: " . $pokemonEscolhido[2] . " | HP: " . $pokemonEscolhido[0] . "\n";
    echo "Boss: " . $boss[2] . " | HP: " . $boss[0] . "\n";
    echo "=======================\n";

    echo $pokemonEscolhido[2] . " ataca " . $boss[2] . "!\n";
    sleep(1);
    $boss[0] -= $pokemonEscolhido[1];
    echo $boss[2] . " agora tem " . $boss[0] . " de HP.\n";
    sleep(1);

    // Verifica se o boss foi derrotado
    if ($boss[0] <= 0) {
        echo "=======================\n";
        echo "Você venceu! " . $boss[2] . " foi derrotado!\n";
        echo "=======================\n";
        break;
    }

    // Turno do boss
    echo $boss[2] . " ataca " . $pokemonEscolhido[2] . "!\n";
    sleep(1);
    $pokemonEscolhido[0] -= $boss[1];
    echo $pokemonEscolhido[2] . " agora tem " . $pokemonEscolhido[0] . " de HP.\n";
    sleep(1);

    // Verifica se o Pokémon escolhido foi derrotado
    if ($pokemonEscolhido[0] <= 0) {
        echo "=======================\n";
        echo "Você perdeu! " . $pokemonEscolhido[2] . " foi derrotado!\n";
        echo "=======================\n";
        break;
    }
}
