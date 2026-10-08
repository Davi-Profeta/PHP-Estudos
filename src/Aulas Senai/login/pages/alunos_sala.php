<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sala.css">
    <title>Document</title>

</head>


<body>

    <main>

        <div class="title">
            <h3>ALUNOS</h3>
        </div>

        <div class="alunos">

            <?php 
        
                include_once("../conexao.php");

                $alunos = mysqli_query($conexao,
                "SELECT *
                FROM aluno");

                echo "<table class='tabela-alunos'>";
                echo "<tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Data de Nascimento</th>
                        <th>Email</th>
                    </tr>";

                while ($i = mysqli_fetch_array($alunos)) {
                    echo "<tr>";
                    echo "<td>{$i['Id_Aluno']}</td>";
                    echo "<td>{$i['Nome']}</td>";
                    echo "<td>{$i['Data_Nascimento']}</td>";
                    echo "<td>{$i['Email']}</td>";
                    echo "</tr>";
                }

                echo "</table>";
            
            ?>

        </div>
        

    </main>
    
</body>

</html>