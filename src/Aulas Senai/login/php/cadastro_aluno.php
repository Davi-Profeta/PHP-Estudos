<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <main>

        <?php

            include_once("../conexao.php");

            $name = $_POST['name'];
            $date = $_POST['date'];
            $email = $_POST['email'];
            $turma = $_POST['turma'];

            $cadAluno = mysqli_query($conexao,
            "INSERT INTO aluno(Nome, Data_Nascimento, Email, Id_Turma)
            VALUES ('$name', '$date', '$email', '$turma')");

            $quantidadeAluno = mysqli_query($conexao,
            "UPDATE turma
            SET Quatidade_Alunos = Quatidade_Alunos + 1
            WHERE Id_Turma = '$turma' ");

            echo "Aluno cadastrado com sucesso!";

        ?>

    </main>
    
</body>

</html>
