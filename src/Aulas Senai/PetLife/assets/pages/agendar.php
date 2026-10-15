<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/agendar.css">
    <title>Document</title>

</head>

<body>

    <header>

        <h2>Agendar e Agendados</h2>

    </header>

    <main>

        <div class="container">

            <div class="agendar">

                <form class="form" action="../php/agendado.php" method="post">

                    <div class="aba">
                        <label for="">Pet</label>
                        <select required class="opt" name="pet" id="">
                            <option selected disabled value="">Selecione um Pet</option>
                          
                            <?php 
                            
                                include_once("../php/conexao.php");

                                $consultarPet = mysqli_query($conexao,
                                "SELECT *
                                FROM pet");

                                while($i = mysqli_fetch_array($consultarPet)){
                                    echo"  <option value=' {$i['Id_Pet']} '> {$i['Nome_Pet']} - {$i['Raça']} </option>";
                                };

                            ?>
                            
                        </select>
                    </div>

                    <div class="aba">
                        <label for="">Tutor</label>
                        <select required class="opt" name="tutor" id="">
                            <option selected disabled value="">Selecione um Tutor</option>
                          
                            <?php 
                            
                                include_once("../php/conexao.php");

                                $consultarTutor = mysqli_query($conexao,
                                "SELECT *
                                FROM tutor");

                                while($i = mysqli_fetch_array($consultarTutor)){
                                    echo"  <option value=' {$i['Id_tutor']} '> {$i['Nome_tutor']} </option>";
                                };

                            ?>
                            
                        </select>

                    </div>

                    <div class="aba">
                        <label for="">Data</label>
                        <input required class="opt" type="date" name="date" id="data-agendamento">
                    </div>

                    <div class="aba">
                        <label for="">Horário</label>
                        <input required class="opt" type="time" name="time" id="">
                    </div>


                    <div class="aba">
                        <button id="btn">Confirmar</button>
                    </div>

                </form>

            </div>

            <div class="agendados">

                <table>

                    <tr>
                        <th> Nome Pet </th>
                        <th> Raça </th>
                        <th> Idade </th>
                        <th> Nome Tutor </th>
                        <th> Data </th>
                        <th> Horário </th>
                    </tr>

                <?php 

                    include_once("../php/conexao.php");

                    $consultaAgendados = mysqli_query($conexao,
                    "SELECT pet.Nome_Pet, pet.`Raça`, pet.Idade, tutor.Nome_tutor, 
                    DATE_FORMAT(agendamento.Data_agendamento, '%d/%m/%Y') AS Data_agendamento, agendamento.Horario
                    FROM agendamento
                    INNER JOIN pet ON agendamento.Id_Pet = pet.Id_Pet
                    INNER JOIN tutor ON agendamento.Id_Tutor = tutor.Id_tutor;");

                    while($i = mysqli_fetch_array($consultaAgendados)){
                        echo"

                        <tr>
                            <td> {$i['Nome_Pet']} </td>
                            <td> {$i['Raça']} </td>
                            <td> {$i['Idade']} </td>
                            <td> {$i['Nome_tutor']} </td>
                            <td> {$i['Data_agendamento']} </td>
                            <td> {$i['Horario']} </td>
                        </tr>
                        
                        ";
                    }
                
                ?>

                </table>

            </div>

        </div>

    </main>

    <script>
        // 1. Pega a data atual no fuso horário local
        const hoje = new Date().toISOString().split('T')[0];

        // 2. Define o atributo 'min' do input com a data de hoje
        document.getElementById('data-agendamento').min = hoje;
    </script>
    
</body>

</html>