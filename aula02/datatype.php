<?php
    $x = "Hello world";
    $y = 'Hello world';

    var_dump($x);
    echo"<br>";
    var_dump($y);
    echo"<br>";

    $x = 12.3;

    var_dump($x);
    echo"<br><br>";
    
    $y = [ 'Felipe', 'Alexandre'];

    var_dump($y);
    echo"<br>";
    echo $y[1];
    $meuObj = new stdClass ();
    $MeuObj-> nome: "Davi";
    $meuObj-> idade: 32;
    $meuJson = json_endcode($meuObj);
    echo $meuJson;
    echo"<br>";
    var_dump($meuJson)

    ?>