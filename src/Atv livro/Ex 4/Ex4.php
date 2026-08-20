<?php
    echo "Nota escolar \n";
    echo "Qual sua nota (0 a 10): ";
    $nota = fgets(STDIN);

    if($nota >= 9){
        echo "Aprovado com excelência \n";
    }
    else if($nota >= 6){
        echo "Aprovado";
    }
    else{
        echo "Reprovado";
    }