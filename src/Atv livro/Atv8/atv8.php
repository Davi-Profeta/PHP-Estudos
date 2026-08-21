<?php
    $produto = array ('Nome' => 'Banana', 'Preço' => '20,00', 'Estoque' => 34, 'Categoria' => 'Frutas');
    echo "Produto Cadastrado \n";
     echo "O produto {$produto['Nome']} da categoria {$produto['Categoria']} custa R$ {$produto['Preço']} e possui {$produto['Estoque']} unidades em estoque.";