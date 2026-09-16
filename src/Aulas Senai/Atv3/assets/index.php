<?php 

    include_once("conexao.php");

    $name = $_POST["name"];

    $consulta = mysqli_query($conexao, 
    "SELECT cliente.Nome_cliente, Telefone
     FROM cliente
     WHERE cliente.Nome_cliente = '$name'"); 

    while($linha = mysqli_fetch_array($consulta)){
        echo "<h1>" . $linha['Nome_cliente'] . "</h1>";
        echo "<h1>" . $linha['Telefone'] . "</h1>";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    
</body>

</html>