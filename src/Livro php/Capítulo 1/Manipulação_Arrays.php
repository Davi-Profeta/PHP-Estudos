<?php
    $cores = array("red", "green", "blue", "yellow");
    echo $cores[0];

    $dados = array('nome' => 'Davi','idade' => 12,'Estado' => 'Rio de Janeiro');
    print_r($dados);

    //Mutidimensionais
    $carros = array('Palio' => array('Cor' => 'Azul',
                                    'Potencia' => '1.0'),
                    'Corsa' => array('Cor' => 'Verde',
                                    'Potencia' => '1.3'),
                    'Gol' => array('Cor' => 'Branco',
                                'Potencia' => '1.0')
    );
    print_r($carros);

    // Manipular
    foreach ($carros as $carro) {

        foreach ($carro as $caracteristica => $valor) {
            echo "Caracteristica {$caracteristica}: {$valor}\n";
        }
    }

    // Funções de array
    $testes = array('Maça','Banana','Laranja');
    $teste_1 = array('Tomate','Cenoura');
    print_r($testes);
    array_push($testes, 'Limão'); // Adiciona no final
    array_unshift($testes, 'Melancia'); // Adiciona no começo
    array_pop($testes); //Remove o ultimo
    array_shift($testes); //Remove o primeiro
    array_reverse($testes,true);
    $saudaveis = array_merge($testes, $teste_1);
    print_r($saudaveis);
    $indices = array_keys($carros); // Retorna os indices,a associação criada por vc normalmente
    $valores = array_values($carros); //Valores dos indices
    array_slice($valores, 0, 2); // Extrai uma porção da array



