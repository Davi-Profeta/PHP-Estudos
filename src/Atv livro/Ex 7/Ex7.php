<?php
    echo "Lista de comprar \n";
    echo "Vamos fazer uma lista de 5 itens \n";
    $list = array();

    for ($i = 0; $i < 5; $i++) {
        echo "Escreva um item: ";
        $nome = fgets(STDIN);
        array_push($list, $nome);
    }

    echo "Seus itens foram: \n";
    foreach ($list as $nome) {
        echo $nome;
    };