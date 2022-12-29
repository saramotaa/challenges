<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>DESAFIO: Salário c/ Bônus</title>
</head>

<body>
<pre>
<?php

// DESAFIO:
// Com o objetivo de ver quanto os seus funcionários vendem, um empresário te contratou para desenvolver um programa que leia: o nome do vendedor, seu salário fixo, e o total de vendas que ele efetuou no mês, sendo este valor em dinheiro.
// Um vendedor da loja ganha 15% de comissão sobre o valor das suas vendas, sendo assim, descubra quanto esse funcionário vai receber no final do mês, com duas casas decimais.

// ENTRADA:
// O arquivo de entrada contém um texto (primeiro nome do vendedor) e 2 valores de dupla precisão (double) com duas casas decimais, representando o salário fixo do vendedor e montante total das vendas efetuadas por este vendedor, respectivamente.

// SAÍDA:
// Imprima o total que o funcionário deverá receber, conforme exemplo fornecido:
// Exemplo de Saída:
// TOTAL = R$1884.58

$nome = "Marcos";
$salario = "500.00";
$totalVendas = "1230.30";

$comissao = ($totalVendas * 0.15);
$totalSalario = ($salario + $comissao);
echo sprintf("R$" . "%.2f", $totalSalario);

?>
</pre>
</body>

</html>