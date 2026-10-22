<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/livro.css">
    <title>Document</title>

</head>

<body>

    <header>

        <h1>Cadastrar Livro e Gênero</h1>

    </header>

    <main>

        <div class="container">

            <form action="livro.php" method="post">

                <div class="field">
                    <label for="">Nome</label>
                    <input class="ipt" required type="text" name="nameLivro" id="">
                </div>

                <div class="field">
                    <label for="">Autor</label>
                    <input class="ipt" required type="text" name="autor" id="">
                </div>

                <div class="field">
                    <label for="">Editora</label>
                    <input class="ipt" required type="text" name="editora" id="">
                </div>

                <div class="field">
                    <label for="">Páginas</label>
                    <input maxlength="12" class="ipt" required type="num" name="pag" id="">
                </div>

                <div class="field">
                    <label for="">Quantidade de Livros</label>
                    <input maxlength="12" class="ipt" required type="num" name="quantidade" id="">
                </div>

                <div class="field">
                    <label for="">Gênero</label>
                    <select class="ipt" name="genero" id="">
                        <option value=""> Selecione um gênero </option>

                        <?php                  
                        
                            $buscarGenero = ("SELECT *
                            FROM genero");

                            $stmt = $pdo->prepare($buscarGenero);
                            $stmt->execute();

                            foreach($stmt as $i){

                                echo"
                                    <option value='{$i['Id_genero']}'> {$i['Nome_genero']} </option>   
                                ";

                            };

                        ?>

                    </select>
                </div>

                <div class="confirm">
                    <button name="livro" id="btn"> Confirmar </button>
                </div>

            </form>

            <form action="livro.php" method="post">

                <div class="field">
                    <label for="">Nome Gênero</label>
                    <input class="ipt" required type="text" name="name_genero" id="">

                <div id="gen" class="confirm">
                    <button name="Genero" id="btn"> Confirmar </button>
                </div>

            </form>

        </div>

    </main>
    
</body>

<?php 

    require_once "../../php/conexao.php";

    if (isset($_POST['livro'])) {

        if($_SERVER['REQUEST_METHOD'] === "POST"){

            $nameLivro = $_POST['nameLivro'];
            $autor = $_POST['autor'];
            $editora = $_POST['editora'];
            $pag = $_POST['pag'];
            $quantidade = $_POST['quantidade'];
            $genero = $_POST['genero'];

            $newLivro = ("INSERT INTO livro(Nome_livro, Paginas, Autor, Editora, Quantidade, Id_genero)
            VALUES ('$nameLivro', '$autor', '$editora', '$pag', '$quantidade', '$genero') ");

            echo" <script> cadLivro(); <?script> ";

        }

    } else if (isset($_POST['Genero'])) {

        if($_SERVER['REQUEST_METHOD'] === "POST"){

            

            echo" <script> genero(); <?script> ";

        }

    }

?>
