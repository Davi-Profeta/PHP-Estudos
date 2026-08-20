<?php
    $frutas = array("maça","banada","uva");
    
    foreach($frutas as $fruta){
        print($fruta . "\n");
    }

    include "include.php"; //Inclue outro arquivo PHP dentro desse algoritmo
    $total = 4;
    print(quadrado($total));

    function calcular_obesidade($peso, $altura){
        return $peso / ($altura * $altura);
    }
    print("\n");
    print(calcular_obesidade(70, 1.85));

    $total_2 = 2;
    function km2mi($quilometros){
        
        global $total_2;
        $tot = $total_2 + $quilometros;
        return $tot;

    }
    print("\n");
    print(km2mi(10) . ' milhas percoridas');

    function soma() {
        $valor_1 = 3;
        $valor_2 = 3;
        static $soma = 0; // Mantém o valor da ultima execução
        
        $soma += $valor_1 + $valor_2; 
        print("\n" . $soma);
    }
    soma(); // Imprime 6
    soma(); // Imprime 12
    soma(); // Imprime 18

    $a = 10;
    Incrementa($a, 20);
    function Incrementa(&$a, $si){ //by reference
        $a += $si;
    }
    print("\n");
    print("\n".$a);

    $fp = fopen ("file.txt");

    
?>