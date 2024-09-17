<?php
// Entrada
$T = intval(trim(fgets(STDIN))); // Tipo correto de chá
$respostas = array_map('intval', explode(' ', trim(fgets(STDIN)))); // Respostas dos cinco competidores

// Variável para contar os acertos
$acertos = 0;

// Verifica quantos competidores acertaram
foreach ($respostas as $resposta) {
    if ($resposta == $T) {
        $acertos++;
    }
}

// Saída.
echo $acertos . "\n";
?>
