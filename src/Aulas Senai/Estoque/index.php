<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Estoque</title>

</head>

<body>

    <script src="assets/script.js" defer></script>

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

                <h1 id="h1">Seja Bem Vindo!</h1>

            </div>

        </main>

        <div class="consultar">

            <div class="mainConsultar">

                <div class="containerConsulta">

                    <div class="titleConsulta">
                        <h3>Consulta de Produtos</h3>
                    </div>

                    <div class="mainConsulta">

                        <form class="formConsultar" action="php/consultar.php" method="post">

                            <div class="atualizar">
                                <label for="produto">Produto</label>
                                <select name="produto" id="produto" required>
                                    <option selected disabled value="">Selecione um produto</option>
                                    <?php
                                        include_once("assets/conexao.php");

                                        $consultar = mysqli_query(
                                            $conexao,
                                            "SELECT Id_Produtos, Nome_Produto FROM produtos"
                                        );

                                        while ($linha = mysqli_fetch_assoc($consultar)) {
                                            echo "<option value='" . $linha['Id_Produtos'] . "'>" . ($linha['Nome_Produto']) . "</option>";
                                        }

                                    ?>
                                </select>
                            </div>

                            <div class="atualizarPrice">
                                <label for="price">Atualizar Preço</label>
                                <input type="number" step="0.01" name="price" id="price" required>
                            </div>

                            <div class="confirm">
                                <button type="submit">Confirmar</button>
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

        <div class="fornecedor">

            <div class="mainFor">

                <form class="formFor" action="php/fornecedor.php" method="post">

                    <h2>Cadastrar Fornecedor</h2>

                    <div class="inputsFor">
                        <label for="">Nome</label>
                        <input class="inpFor" type="text" name="name" placeholder="Digite o nome">
                    </div>

                    <div class="inputsFor">
                        <label for="">Telefone</label>
                        <input class="inpFor" maxlength="11" type="tel" name="tel" placeholder="(00) 00000-0000">
                    </div>

                    <div class="inputsFor">
                        <label for="">Endereço</label>
                        <input class="inpFor" type="text" name="end" placeholder="Rua, número...">
                    </div>

                    <div class="inputsFor">
                        <label for="">CNPJ</label>
                        <input class="inpFor" maxlength="14" type="text" name="cnpj">
                    </div>

                    <button class="btnFor">Confirmar</button>

                </form>

            </div>

        </div>

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
                            <option selected disabled value="">Escolha o fornecedor</option>
                            <?php

                            include_once("assets/conexao.php");

                            $conexaoFornecedor = mysqli_query(
                                $conexao,
                                "SELECT Id_fornecedor,Nome_fornecedor
                                FROM fornecedor"
                            );

                            while ($Linha = mysqli_fetch_array($conexaoFornecedor)) {
                                echo "<option value = '" . $Linha['Id_fornecedor'] . "'>" . $Linha['Nome_fornecedor'] .   "</option>";
                            };

                            ?>

                        </select>
                    </div>

                    <button class="btnCad">Confirmar</button>

                </form>

            </div>

        </div>

    </div>


</body>

</html>