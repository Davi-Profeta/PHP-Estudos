<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <?php

        include_once("conexao.php");

        $Pet = $_POST['pet'];
        $Tutor = $_POST['tutor'];
        $Date = $_POST['date'];
        $Time = $_POST['time'];

        $agendado = mysqli_query($conexao,
        "INSERT INTO agendamento(Data_agendamento, Horario, Id_Tutor, Id_Pet)
        VALUES ('$Date', '$Time', '$Tutor', '$Pet') ");

        echo" Agendamento feito com sucesso! ";
        

    ?>
    
</body>

</html>

