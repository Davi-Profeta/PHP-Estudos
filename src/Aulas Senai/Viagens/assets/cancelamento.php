<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cancelamento.css">
    <title>DP - Viagens</title>

</head>

<body>
    
    <header>

        <div class="title">
            <h1>DP - VIAGENS</h1>
        </div>

        <div class="pages">
            <table>
                <td> <a href="../../index.php"> Início </a> </td>
                <td> <a href=""> Cancelamento </a> </td>
                <td> <a href="sobre.html"> Sobre </a> </td>
            </table>
        </div>

    </header>

    <main>

        <div class="container">

            <div class="titleCan">
                <h3>Cancelamento de Viagem</h3>
            </div>

            <div class="pesquisa">

                <div class="filters">

                    <?php

                        include_once("conexao.php");

                        $nome = $_POST['name'];
                        $telefone = $_POST['tel'];
                        $email = $_POST['email'];

                        $consultaCancelamento = mysqli_query($conexao,
                        "SELECT Nome_Cliente, Telefone, Email
                        FROM cliente
                        WHERE Nome_Cliente = '$nome' AND Telefone = '$telefone' AND Email = '$email' ");

                        echo 'Sucesso ao achar cliente assim';

                    ?>

                </div>


            </div>
            

        </div>

    </main>


</body>

</html>