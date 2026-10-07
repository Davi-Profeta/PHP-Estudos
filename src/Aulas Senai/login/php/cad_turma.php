<?php

    include_once("../conexao.php");

    $turno = $_POST["turno"];
    $curso = $_POST["curso"];

    $cadTurma = mysqli_query($conexao,
    "INSERT INTO turma(Turno,Curso, Quatidade_Alunos)
    VALUES ('$turno', '$curso', 0)");


?>

<!DOCTYPE html>
<html lang="pt_br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    
    <?php 
        echo "Turma cadastrada com sucesso!";
    ?>

</body>

</html>