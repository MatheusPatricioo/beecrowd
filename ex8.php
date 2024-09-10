Leia um valor de ponto flutuante com duas casas decimais. Este valor representa um valor monetário. A seguir, calcule o
menor número de notas e moedas possíveis no qual o valor pode ser decomposto. As notas consideradas são de 100, 50, 20,
10, 5, 2. As moedas possíveis são de 1, 0.50, 0.25, 0.10, 0.05 e 0.01. A seguir mostre a relação de notas necessárias.

Entrada
O arquivo de entrada contém um valor de ponto flutuante N (0 ≤ N ≤ 1000000.00).

Saída
Imprima a quantidade mínima de notas e moedas necessárias para trocar o valor inicial, conforme exemplo fornecido.

Obs: Utilize ponto (.) para separar a parte decimal.
<?php

// Leitura do valor de entrada
$valor = floatval(fgets(STDIN));

// Definindo as notas e moedas disponíveis
$notas = [100, 50, 20, 10, 5, 2];
$moedas = [1, 0.50, 0.25, 0.10, 0.05, 0.01];

// Separando a parte inteira e a parte decimal
$valor_inteiro = intval($valor); // Parte inteira
$valor_decimal = intval(round(($valor - $valor_inteiro) * 100)); // Parte decimal como inteiro

// Processamento das notas
echo "NOTAS:\n";
foreach ($notas as $nota) {
  $qtd_notas = intval($valor_inteiro / $nota);
  echo "$qtd_notas nota(s) de R$ " . number_format($nota, 2, '.', '') . "\n";
  $valor_inteiro %= $nota; // Atualiza o valor com o que sobrou
}

// Processamento das moedas
// A parte inteira pode ter sobrado, então juntamos com a parte decimal
$valor_decimal += $valor_inteiro * 100;

echo "MOEDAS:\n";
foreach ($moedas as $moeda) {
  $qtd_moedas = intval($valor_decimal / ($moeda * 100));
  echo "$qtd_moedas moeda(s) de R$ " . number_format($moeda, 2, '.', '') . "\n";
  $valor_decimal %= intval($moeda * 100); // Atualiza o valor com o que sobrou
}

?>