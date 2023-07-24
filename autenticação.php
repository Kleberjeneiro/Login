<!DOCTYPE html>


<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Autenticação Usuário</title>

    </head>

    <body>

        

        <section>

            <?php


                $usuarioAutenticado = $_POST["usuario"];
                $senhaAutenticada = $_POST["senha"];


                if ($usuarioAutenticado == "Joshua@gmail.com" && $senhaAutenticada == 12345 ){

                    echo "Acesso Liberado";

                } elseif ($usuarioAutenticado == "Joshua@gmail.com" && $senhaAutenticada != 12345) {
                    
                    echo "Usuário correto.<br>";
                    echo "Senha Inválida.";

                } elseif ($usuarioAutenticado != "Joshua@gmail.com" && $senhaAutenticada == 12345) {
                    
                    echo "Usuário Inválido.<br>";
                    echo "Senha Correta.";

                } else {
                    
                    echo "Usuário ou Senha Inválido";
                }


            ?><br><br>
            <a href="index.php">Inicio</a>

        </section>



    </body>
</html>
