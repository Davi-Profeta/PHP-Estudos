<?php
    $ano = 2024;

    if(($ano % 4 === 0 && $ano % 100 !== 0) || ($ano % 400 === 0)){
        echo 'Ano bissexto '."\n";
    }
    else{
        echo 'Ano normal '."\n";
    }

    $frutas = array("maça","banada","uva");

    foreach($frutas as $fruta){
        print($fruta . "\n");
    }

    include "include.php"; //Inclue, outro arquivo PHP dentro desse algoritmo
    $total = 4;
    print(quadrado($total));

    $a = 10;
    Incrementa($a, 20);
    function Incrementa(&$a, $si){ //by reference
        $a += $si;
    }
    print("\n");
    print("\n".$a);

    // Manipulação de arquivos e diretórios
    $fp = fopen("Nova Pasta/texto.txt", "r");
    while (!feof($fp)) {
        $linha = fgets($fp, 4096);
        echo "\n" . $linha;
    }
    // fopen, abre o arquivo
    // feof, um valor booleano que vai ver se chegou no fim do arquivo
    // fgets, lê as linhas e imprime no terminal
    fclose($fp);

    $fp_1 = fopen("Nova Pasta/receba.txt", "a+");
    $ex = 'Nova linha de texto';
    fwrite($fp_1, $ex); // fwrite, escreve no arquivo
    fclose($fp_1);

    file_put_contents("Nova Pasta/receba.txt", "Sempre louco");// Grava uma string no arquivo, mas não fica salva
    echo file_get_contents("Nova Pasta/receba.txt");// Lê o contéudo e imprime em string

    $arquivo = file ("Nova Pasta/receba.txt"); // Arquivo em array
    echo $arquivo[0];

    $verificar = "Nova Pasta/receba.txt";
    if(file_exists($verificar)){ //Verifica se o arquivo existe
        echo "\n" . 'Arquivo existente';
    }
    else{
        echo "\n" . 'Arquivo não existente';
    }

    $texto1 = 'Maça';
    echo "\n"."Eu como {$texto1}";

