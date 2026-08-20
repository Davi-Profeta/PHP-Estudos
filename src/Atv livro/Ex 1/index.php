<?php
    echo "Olá! \n";
    echo "Qual a sua idade: ";
    $idade = fgets(STDIN);

    if ($idade < 18) {
        echo "Acesso negado: Menor de idade.";
    }
    else{
        echo "Acesso permitido: Maior de idade.";
    }