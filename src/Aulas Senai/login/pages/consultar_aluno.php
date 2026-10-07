<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/consutar.css">
    <title>Document</title>

</head>

<body>

    <main>

        <div class="title">
            <h2>Turmas disponiveis</h2>
        </div>

        <div class="container">
            

        <?php 

            include_once("../conexao.php");

            $consultarTurma = mysqli_query($conexao,
            "SELECT *
            FROM turma
            WHERE turma.Quatidade_Alunos < 30 ");

            while($i = mysqli_fetch_array($consultarTurma)){

                echo"
                
                    <a href='alunos_sala.php'>  
                    
                        <div  class='turma'>

                            <div class='titleTurma'>
                                <h3> {$i['Curso']} </h3>
                            </div>

                            <div class='corpoTurma'>
                                <p> {$i['Turno']} </p>
                                <p> Quantidade de Aluno: {$i['Quatidade_Alunos']} </p>
                            </div>

                        </div>

                    </a>
                
                ";

            }
        
        ?>

        </div>

    </main>
    
</body>

</html>