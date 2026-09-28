<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>DP - Viagens</title>

</head>

<body>

    <div class="container">

        <header>

            <div class="title">
                <h1>DP - VIAGENS</h1>
            </div>

            <div class="pages">
                <table>
                    <td> <a href="assets/sobre.html"> Sobre </a> </td>
                </table>
            </div>

        </header>

        <div class="imgTeste">

        </div>

    </div>
    

    <div class="mainContainer">

        <section>

            

        </section>

        <main>

            <div class="viagens">

                <div class="imgViagen">
                    <img class="landscape" src="photos/roteiro-foz-do-iguacu-cataratas-1-2.jpg" alt="">
                </div>

                <div class="descriptionViagem">

                    <?php

                        include_once("assets/conexao.php");

                        $description = mysqli_query($conexao,
                        "SELECT * FROM Viagem");

                        while($linha = mysqli_fetch_array($description)){
                         echo "
                            <div class='info-viagem'>
                                <h3>{$linha['Nome_Viagem']}</h3>
                                <p><strong>Origem:</strong> {$linha['Origem']}</p>
                                <p><strong>Destino:</strong> {$linha['Destino']}</p>
                                <p><strong>Data:</strong> " . date('d/m/Y', strtotime($linha['Dia'])) . "</p>
                                <p><strong>Horário:</strong> {$linha['Horário']}</p>
                            </div>
                            "; 
                        };
                    
                    ?>

                </div>

            </div>
            <div class="viagens">

            </div>
            <div class="viagens">

            </div>
            <div class="viagens">

            </div>
            
        </main>

    </div>
    
    
</body>

</html>