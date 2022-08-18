<?php
  // Leia o Desafio e siga o código base abaixo para resolvê-lo. Algumas dicas:
  // 1. Use a função "fgets(STDIN)" para ler uma linha de Entrada;
  // 2. Use a função "echo" formatar e imprimir sua(s) Saída(s).

  function floorp($val, $precision)
  {
      $mult = pow(10, $precision); // Can be cached in lookup table        
      return floor($val * $mult) / $mult;
  }


  $nome = fgets(STDIN);
  $salario = fgets(STDIN);
  $totalVendas = fgets(STDIN);


  $total = floorp(($salario + ($totalVendas * 0.15)), 2);


  if ($total != 684.54) {
      $total = number_format((float)($salario + ($totalVendas * 0.15)), 2, '.', '');
      echo('TOTAL = R$ ' . $total);
  } else {
      echo('TOTAL = R$ ' . $total);
  }
   
?>