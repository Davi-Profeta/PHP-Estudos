<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>PetLive</title>

</head>

<body>

    <main>

        <div class="pos">

            <?php 

                include_once("conexao.php");

                $User = $_POST['user'];
                $Password = $_POST['password'];

                $login = mysqli_query($conexao,
                "SELECT Nome_atendente, senha
                FROM atendente
                WHERE Nome_atendente = '$User' AND senha = '$Password' ");

                if(mysqli_num_rows($login) > 0){
                    echo "Login feito com sucesso! Redirecionando";
                   header("Refresh: 2; url=../pages/principal.html");
                } else {
                    echo "Usuário ou senha incorretos! Redirecionando";
                    header("Refresh: 3; url=../../index.html");
                };
            
            ?>

        </div>

    </main>
    
</body>

</html>