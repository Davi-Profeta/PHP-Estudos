<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

<?php

    include_once("conexao.php");

    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $city = $_POST['city'];

    $insertPerson = mysqli_query($conexao,
    "INSERT INTO cliente(Nome_cliente,Telefone,Email,Cidade)
    VALUES ('$name', '$tel', '$email', '$city');"
    );

?>
    
    <h1>Cadastro feito com sucesso</h1>
    <a href="../index.html">
        <button type="button">Voltar</button>
    </a>

</body>

</html>