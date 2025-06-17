<?php
   echo "Vamos calcular o seu produto, ";
   $produto = $_POST["prod"];
   $parcelas = 10;
   $porcentagem = ($produto * 1.16);
   $total = ($prod + $porcentagem);
   $totalparcela = ($total / $parcelas);

   echo "Valor das parcelas é: $totalparcela <br> E o valor total é $total <br>";

?>