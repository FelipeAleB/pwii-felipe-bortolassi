<?php
echo "While <br>";
//while
$contador = 1;

while ($contador < 6) {
  echo $contador; "<br>";
  $contador++;
}
echo "do while <br>";
//do while
$contadorii = 1;

do{
    echo$contadorii , "<br>"; 
    $contadorii++;
}while ($contadorii < 6);

//For

echo "<br> For <br>";

for ($x = 0; $x <= 10; $x++) {
    echo "O numero é: $x <br>";
  }

?>

