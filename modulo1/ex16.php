

<?php
$idades = [];

for ($i = 0; $i <= 5; $i++) {
    echo "Digite a idade das pessoas " . ($i + 1) . ": ";
    $idade = (int) readline();
    $idades[] = $idade;
}

$soma = array_sum($idades);
$media = $soma / 6;


echo "As idades digitadas foram: " . implode(", ", $idades) . "\n";

echo "A média das idades é: " . $media . "\n";

foreach ($idades as $idade) {
    if ($idade > $media) {
        echo "a idade que está acima da media: " .$idade;
    }
}



?>