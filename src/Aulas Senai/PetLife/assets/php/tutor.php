<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        main{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

    </style>

</head>

<body>

    <main>

        <?php

            include_once("conexao.php");

            $name = $_POST['name'];
            $CPF = $_POST['cpf'];
            $Tel = $_POST['tel'];

            $InserirTutor = mysqli_query($conexao,
            "INSERT INTO tutor(Nome_tutor, CPF, Telefone)
            VALUES ('$name', '$CPF', '$Tel')");

            echo"<h1> Cadastrado com sucesso! </h1>";

        ?>

    </main>
    
</body>

</html>

