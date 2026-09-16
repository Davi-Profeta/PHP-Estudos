<?php 

    include_once("conexao.php");

    if(isset($_POST['name'])){

        $Name = $_POST['name'];
        $Cargo = $_POST['cargo_id'];
        $Date = $_POST['date'];
        $Tel = $_POST['tel'];
        $Endereco = $_POST['endereco'];

        $consulta = mysqli_query($conexao,
        "INSERT INTO cadastro(Nome_funcionario,Data_nascimento,Telefone,Endereco,Id_cargo)
        VALUES ('$Name','$Date','$Tel','$Endereco','$Cargo');");

    };

    if(isset($_POST['Name_cargo'])){

        $NameCargo = $_POST['Name_cargo'];

        $consultaCargo = mysqli_query($conexao,
        "SELECT cadastro.Nome_funcionario,cargos.Nome_cargo Cargos,cargos.Salario_cargo
        FROM cadastro
        INNER JOIN cargos ON cadastro.Id_cargo = cargos.Id_cargo
        WHERE cargos.Nome_cargo = '$NameCargo';");

        while($linha = mysqli_fetch_array($consultaCargo)){
            echo "<h1>" . $linha['Nome_funcionario'] . "</h1>"; 
            echo "<h1>" . $linha['Cargos'] . "</h1>"; 
            echo "<h1>" . $linha['Salario_cargo'] . "</h1>"; 
            echo "<br> <br>";
        }

    };

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>RH Simples</title>

</head>

<body>
    
    <div class="corpo">

        <header>
            <h1>Sistema RH</h1>
        </header>

        <div class="conteudo">

            <section>

                <div class="options">
                    <a id="return" href="../index.html">Voltar</a>
                </div>

            </section>

            <main>
                
                <h1>Cadastro feito com sucesso</h1>

            </main>

        </div>

    </div>
    

</body>
    <script src="script.js"></script>
</html>