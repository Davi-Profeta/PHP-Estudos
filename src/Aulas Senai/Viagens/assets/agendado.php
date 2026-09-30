<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/agendarPHP.css">
    <title>Document</title>

</head>

<body>
    
    <div class="container">

        <header>

            <div class="title">
                <h1>DP - VIAGENS</h1>
            </div>

            <div class="pages">
                <table>
                    <td> <a href="../index.php"> Início </a> </td>
                    <td> <a href="./pages/cancelamento.html"> Cancelamento </a> </td>
                    <td> <a href="assets/sobre.html"> Sobre </a> </td>
                </table>
            </div>

        </header>

        <div class="agendamento">

            <section>


            </section>

            
            <?php

                include_once("conexao.php");

                $Name = $_POST['name'];
                $Tel = $_POST['tel'];
                $Email = $_POST['email'];

                $FormCliente = mysqli_query($conexao,
                "INSERT INTO cliente(Nome_Cliente,Telefone,Email)
                VALUES ('$Name', '$Tel', '$Email') " );


                echo 'Agendamento feito com sucesso!';


            ?>


        </div>

    </div>

    

</body>

</html>

