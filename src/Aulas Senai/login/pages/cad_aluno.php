<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/aluno.css">
    <title>Document</title>

</head>

<body>

    <main>

        <div class="title">
            <h2>Cadastrar Aluno</h2>
        </div>

        <form class="container" action="../php/cadastro_aluno.php" method="post">

            <div class="aba">
                <label for="">Nome</label>
                <input type="text" name="name" id="">
            </div>
            
            <div class="aba">
                <label for="">Data de Nascimento</label>
                <input type="date" name="date" id="">
            </div>

            <div class="aba">
                <label for="">Email</label>
                <input type="email" name="email" id="">
            </div>

            <div class="aba">
                <label for="">Turma</label>
                <select name="turma" id="">
                    <option selected disabled value="">Selecione uma turma</option>
                    <?php 
                        
                        include_once("../conexao.php");

                        $consultarTurma = mysqli_query($conexao,
                        "SELECT *
                        FROM turma
                        WHERE turma.Quatidade_Alunos < 30 ");
                        

                        while($i = mysqli_fetch_array($consultarTurma)){
                            echo "
                                <option value=' {$i['Id_Turma']} '> {$i['Turno']} - {$i['Curso']} </option>
                            ";
                        }
                    
                    ?>
                </select>
            </div>

            <div class="aba">
                <button>Cadastrar Aluno</button>
            </div>

        </form>

    </main>
    
</body>

</html>