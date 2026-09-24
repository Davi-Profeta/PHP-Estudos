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


        <div class="cadastrar">

            <div class="mainCadastrar">

                <form class="formCadastrar" action="php/produto.php" method="post">

                    <h2>Cadastrar Produto</h2>

                    <div class="inputsCad">
                        <label for="">Nome</label>
                        <input class="inpCad" type="text" name="name" placeholder="Digite o nome">
                    </div>

                    <div class="inputsCad">
                        <label for="">Preço</label>
                        <input class="inpCad" type="text" name="preco">
                    </div>

                    <div class="inputsCad">
                        <label for="">Quantidade</label>
                        <input class="inpCad" type="number" name="quantidade">
                    </div>

                    <div class="inputsCad">
                        <label for="">Fornecedor</label>
                        <select name="fornecedor" id="">

                        </select>
                    </div>



                    <button class="btnCad">Confirmar</button>

                </form>

            </div>

        </div>

    </div>

</body>
<script src="../assets/script.js"></script>

</html>