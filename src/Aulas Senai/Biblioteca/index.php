<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <header>



    </header>

    <main>

        <form action="index.php" method="post">

            <div class="abaForm">
                <label for="">Usuário</label>
                <input type="text" name="user" class="ipt">
            </div>

            <div class="abaForm">
                <label for="">Senha</label>
                <input type="password" name="password" class="ipt">
            </div>

            <div class="abaForm">
                <button>Confirmar</button>
            </div>

        </form>

    </main>
    
</body>

</html>

<?php 
    // mysqli:db=nome ; host=local, root, "";
    $pdo = new PDO("mysqli:dbname=biblioteca ; host=localhost","root","");

    $User = $_POST['user'];
    $Password = $_POST['password'];

    $login = ("SELECT ")

    $login = $pdo->prepare()


?>