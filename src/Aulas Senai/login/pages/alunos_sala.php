<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>


<body>

    <main>

        <div class="title">
            <h3>Alunos</h3>
        </div>

        <div class="alunos">

            <?php 
        
                include_once("../conexao.php");

                $alunos = mysqli_query($conexao,
                "SELECT *
                FROM aluno");

                while($i = mysqli_fetch_array($alunos)){

                    echo "

                        <div class='aluno'>
                            <p> {$i['Id_Aluno']} </p>
                            <p> {$i['Nome']} </p>
                            <p> {$i['Data_Nascimento']} </p>
                            <p> {$i['Email']} </p>
                        </div>

                    ";

                }
            
            ?>

        </div>
        

    </main>
    
</body>

</html>