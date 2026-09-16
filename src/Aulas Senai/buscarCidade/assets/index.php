<?php

    include_once("conexao.php");

    $City = $_POST["city"];

    $consulta = mysqli_query($conexao,
    "SELECT cliente.Nome_cliente
    FROM cliente
    WHERE Cidade = '$City' ");

    while($linha = mysqli_fetch_array($consulta)){
        echo "<h1>" . $linha['Nome_cliente'] . "</h1>";
    }


?>

