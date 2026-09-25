<?php

    include_once("../assets/conexao.php");

    $Produto = $_POST['produto'];
    $Price = $_POST['price'];

    $update = mysqli_query($conexao,
    "UPDATE produtos
    SET Preco = '$Price'
    WHERE Id_Produtos = '$Produto'");

    $nomeProduto = "";

    $consultaNome = mysqli_query($conexao,
    "SELECT Nome_Produto FROM produtos WHERE Id_Produtos = '$Produto'");

    if ($consultaNome && $linhaNome = mysqli_fetch_assoc($consultaNome)) {
        $nomeProduto = $linhaNome['Nome_Produto'];
    }

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
    
    <script src="../assets/consultar.js" defer ></script>

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

                <p id="produtoSi">Produto <?php echo htmlspecialchars($nomeProduto); ?> atualizado para R$ <?php echo number_format((float)$Price, 2, ',', '.'); ?></p>

            </div>

        </main>

    </div>


</body>

</html>
