<?php

    //Parâmetro de conexão com o BD
    // Variaveis que recebem os dados do formulário
    // Interação com o BD
    // Retorno ao cliente
    
    include_once("conexao.php");

    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];

    $insertName = mysqli_query($conexao, 
        "INSERT INTO Aluno(Nome_aluno,Telefone,Email)
        VALUES ('$name', '$number', '$email');" 
    );

    echo "Aluno inserido com sucesso";

?>