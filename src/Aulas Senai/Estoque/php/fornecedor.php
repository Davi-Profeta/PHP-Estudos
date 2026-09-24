<?php

    include_once("../assets/conexao.php");

    $Name = $_POST["name"];
    $Tel = $_POST["tel"];
    $Endereco = $_POST["end"];
    $CNPJ = $_POST["cnpj"];

    $conexaoFor = mysqli_query($conexao, 
    "INSERT INTO fornecedor(Nome_fornecedor,Telefone,Endereco,CNPJ)
    VALUES ('$Name', '$Tel', '$Endereco', '$CNPJ') ");

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
    
    <script src="../assets/fornecedor.js" defer ></script>

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


        </header>

        <main class="main">

            <div class="index">

                <p>Cadastro feito com sucesso!</p>

            </div>

        </main>

    </div>


</body>

</html>