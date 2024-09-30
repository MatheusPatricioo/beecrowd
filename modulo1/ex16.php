Problema:
Você precisa criar um programa em PHP que peça ao usuário para inserir 6 idades de pessoas. Depois de coletar essas idades,
 o programa deve:

Calcular e exibir a idade média.
Exibir todas as idades que estão acima da idade média.
Regras:
Use um vetor para armazenar as idades.
Use um laço de repetição para coletar as idades do usuário.
Calcule a média das idades.
Exiba as idades que estão acima da média.

<?php
    $idades =[];
    
    for ($i = 0; $i <= 5; $i++) {
        echo "Digite a idade das pessoas " . ($i + 1) . ": ";
        $idade = (int) readline();
        $idades[] = $i;

    
    }

?>