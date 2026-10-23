<?php
    require_once "../../php/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/estoque.css">
    <title>Estoque</title>
 
</head>
 
<body>
 
    <header>
 
        <h1>Estoque</h1>
 
    </header>
 
    <main>
 
        <section class="painel">
 
            <h2>Livros</h2>
 
            <div class="tabela-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th class="num">Quantidade</th>
                        </tr>
                    </thead>
                    <tbody>
 
                        <?php 

                            $livros = ("SELECT *
                            FROM livro ");

                            $stmt = $pdo->prepare($livros);
                            $stmt->execute();

                            foreach($stmt as $i){
                                echo"
                                    <tr>
                                        <td> {$i['Nome_livro']} </td>
                                        <td> {$i['Quantidade']} </td>
                                    </tr>
                                ";
                            };
                        
                        ?>
 
                    </tbody>
                </table>
            </div>
 
        </section>
 
        <section class="painel">
 
            <h2>Empréstimos</h2>
 
            <div class="tabela-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Livro</th>
                            <th>Data devolução</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 

                            $emprestimos = ("SELECT data_emprestimo,data_expirar, Nome_cliente, Nome_livro
                            FROM emprestimo
                            INNER JOIN cliente ON cliente.Id_cliente = emprestimo.Id_cliente
                            INNER JOIN livro ON livro.Id_livro = emprestimo.Id_livro;");

                            $stmt = $pdo->prepare($emprestimos);
                            $stmt->execute();

                            foreach($stmt as $i){
                                echo"
                                    <tr>
                                        <td> {$i['Nome_cliente']} </td>
                                        <td> {$i['Nome_livro']} </td>
                                        <td> {$i['data_expirar']} </td>
                                    </tr>
                                ";
                            };
                        
                        ?>
 
                    </tbody>
                </table>
            </div>
 
        </section>
 
    </main>
 
</body>
 
</html>