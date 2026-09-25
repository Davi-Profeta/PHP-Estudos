<?php

    include_once("../assets/conexao.php");

    $Name = $_POST["name"];
    $Preco = $_POST["preco"];
    $Quantidade = $_POST["quantidade"];
    $Fornecedor = $_POST["fornecedor"];

    $conexaoFornecedor = mysqli_query(
        $conexao,
        "INSERT INTO produtos(Nome_Produto,Preco,Quantidade,Id_Fornecedor)
        VALUE ('$Name', '$Preco', '$Quantidade', '$Fornecedor')"
    );

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Estoque</title>

</head> 

<body>
    
    <script src="../assets/produto.js" defer ></script>

    <div class="container">

        <header class="header">

            <div class="logo">

            </div>

            <div class="abas">
                <div class="fundoA">
                    <img src="photos/analitico.png" alt="">
                </div>
                <p id="consultar"></p>
            </div>

            <div class="abas">
                <div class="fundoA">
                    <img src="photos/analitico.png" alt="">
                </div>
                <p id="cadFornecedor"></p>
            </div>

            <div class="abas">
                <div class="fundoA">
                    <img src="photos/analitico.png" alt="">
                </div>
                <p id="cadProduto"></p>
            </div>


        </header>

        <main class="main">

            <div class="index">

                <p id="Feito">Cadastro feito com sucesso!</p>

            </div>

        </main>

    </div>


</body>

</html>
