<?php
   echo "Vamos calcular o seu volume, ";
   $compr = $_POST["compr"];
   $larg = $_POST["larg"];
   $alt = $_POST["alt"];
   $vol = ($compr * $larg * $alt);

   echo "O seu volume é: $vol <br>";

?>