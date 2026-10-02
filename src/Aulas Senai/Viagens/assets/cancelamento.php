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

                        $cpf = $_POST['cpf'];

                        $consultaCancelamento = mysqli_query($conexao,
                        "SELECT *
                        FROM passagem
                        INNER JOIN cliente
                        ON passagem.Id_cliente = cliente.Id_Cliente
                        WHERE cliente.CPF = '$cpf';");

                        if(mysqli_num_rows($consultaCancelamento) >= 1){
                            
                            $deletar = mysqli_query($conexao,
                            "DELETE passagem
                            FROM passagem
                            INNER JOIN cliente
                            ON passagem.Id_cliente = cliente.Id_Cliente
                            WHERE cliente.CPF = '$cpf';");

                            echo 'Cancelamento feito com sucesso!';

                        } else {

                            echo "CPF Inválido";

                        };

                    ?>

                </div>


            </div>
            

        </div>

    </main>


</body>

</html>