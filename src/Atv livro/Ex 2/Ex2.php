<?php
    echo "Bem vindo ao mercado \n";
    echo "Qual o valor do seus produtos: ";
    $total = fgets(STDIN);
    $desconto = $total * 0.10;
    $valorFinal = $total - $desconto;

    echo "Temos desconto de 10%, seu produto deu {$valorFinal}R$";