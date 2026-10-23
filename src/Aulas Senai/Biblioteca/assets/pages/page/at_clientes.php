<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/at_cliente.css">
    <title>Document</title>

</head>

<body>

    <header>

        <h1>Atualizar Clientes</h1>

    </header>

    <main>

        <div class="container">

            <div class="tabela-wrapper">

                <table> 

                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Email</th>
                        <th>Telefone</th>
                    </tr>

                    <?php 

                        require_once "../../php/conexao.php";

                        
                        $show = ("SELECT *
                        FROM cliente");

                        $stmt = $pdo->prepare($show);
                        $stmt->execute();

                        foreach($stmt as $i){
                            echo"

                                <tr>
                                    <td> {$i['Nome_cliente']} </td>
                                    <td> {$i['CPF']} </td>
                                    <td> {$i['Email']} </td>
                                    <td> {$i['Telefone']} </td>
                                </tr>

                            ";
                        ;}

                    
                    ?>

                </table>

            </div>

        </div>

    </main>
    
</body>

</html>