<?php
  // Leia o Desafio e siga o código base abaixo para resolvê-lo. Algumas dicas:
  // 1. Use a função "fgets(STDIN)" para ler uma linha de Entrada;
  // 2. Use a função "echo" formatar e imprimir sua(s) Saída(s).

  $nome = fgets(STDIN);
  $salario = fgets(STDIN);
  $totalVendas = fgets(STDIN);
  $porcentagem = 15.0/100.0;
  

  //TODO: Calcule e imprima o TOTAL, tendo em vista o padrão de Saída.
   $total = $salario + ($totalVendas * $porcentagem);
   $total = floatval($total);
  
    echo "TOTAL = R$ " .floor($total,2,'.',"");
   
?>