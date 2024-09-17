<?php
$valorA = floatval(fgets(STDIN));
$valorB = floatval(fgets(STDIN));
$valorC = floatval(fgets(STDIN));



$triangulo; 
 if (($valorA < $valorC + $valorB && $valorB < $valorA + $valorC && $valorC < $valorB + $valorA)) {
    echo"É um triangulo";

  } else {
    echo "não é triangulo";
  };
  
?>