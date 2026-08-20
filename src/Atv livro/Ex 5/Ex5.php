<?php
    echo "Taboada \n";
    echo "Digite um número: ";
    $num = fgets(STDIN);

    for($n = 1; $n <= 10; $n++){
        $total = $num * $n;
        print($num . " X " . $n . " = " . $total . "\n");
    }