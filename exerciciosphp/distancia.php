<?php
   echo "Vamos calcular o seu consumo médio, ";
   $dist = $_POST["dist"];
   $quant = $_POST["quant"];
   $consumo = ($dist / $quant);

   echo "O seu consumo médio é: $consumo <br>";

?>