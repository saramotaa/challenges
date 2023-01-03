<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Desafio - RangeException</title>
</head>

<body>
<pre>
<?php

//Divisão onde o divisor não pode ser zero e o que for dividido terá que ser somente números.
//RangeException: Erros aritméticos

function divisao($dividendo, $divisor)
{
  if(gettype($divisor) == 'string' || gettype($dividendo) == 'string') {
    throw new RangeException("Insira somente números");
  }
  if($divisor == 0){
    throw new RangeException("Divisor não pode ser zero.");
  }
  $resultado = $dividendo/$divisor;
  echo "O resultado é " . $resultado;
}

divisao(10,2);

?>
</pre>
</body>

</html>