<?php
    echo "Vamos calcular as vendas diárias \n";
    $vendas = array ();
    echo "Coloque o preço das 5 vendas \n";
    for($i = 0; $i < 5; $i++){
        echo "Venda {$i}: ";
        $preco = fgets(STDIN);
        array_push($vendas, $preco);
    }

    $total = 0;
    foreach($vendas as $venda){
        $total += $venda;
    }
    echo "O total de vendas hoje foi: R$ {$total}";