<?php

    include_once("../assets/conexao.php");

    $Produto = $_POST['produto'];
    $Price = $_POST['price'];

    $update = mysqli_query($conexao,
    "UPDATE produtos
    SET Preco = '$Price'
    WHERE Id_Produtos = '$Produto'");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    
    <h1>Siiiiu</h1>

</body>

</html>