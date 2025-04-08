<?php
    $x = 5;
    $y = 3;
    $media = ($x + $y) / 2;
    //media >= 6,0 = 'aprovado'
    // media <= 6,0 &&>= 
    //= 'recuperação'
    // media < 4,0 = 'reprovado'
    if ($media >= 6.0) {
        //se verdade
        echo 'aluno aprovado';
    } else if ($media >= 4.0) {
        //se verdade
        echo 'Aluno em recuperação';
    } else {
        //se falsa
        echo 'Aluno reprovado';
    }   
?>