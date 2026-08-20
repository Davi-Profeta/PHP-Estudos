<?php
    echo "Calculadora de par ou ímpar \n";
    echo "Digite um número: ";
    $num = fgets(STDIN);

    if($num % 2 == 0){
        echo "Seu número é par";
    }
    else{
        echo "Seu número é ímpar";
    }