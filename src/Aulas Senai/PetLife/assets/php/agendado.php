<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        main{
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

</head>

<body>

    <main>

    <?php

        include_once("conexao.php");

        $Pet = $_POST['pet'];
        $Tutor = $_POST['tutor'];
        $Date = $_POST['date'];
        $Time = $_POST['time'];

        $agendado = mysqli_query($conexao,
        "INSERT INTO agendamento(Data_agendamento, Horario, Id_Tutor, Id_Pet)
        VALUES ('$Date', '$Time', '$Tutor', '$Pet') ");

        echo"<h1> Agendamento feito com sucesso! </h1>";
        

    ?>

    </main>
    
</body>

</html>

