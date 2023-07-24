<!DOCTYPE html>


<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Verificação de Usuário</title>

    </head>

    <body>

        

        <section>

            <?php

                $autenticarusuario = $_POST["autenticar"];
                $autenticarsenha = $_POST["senha"];

                if($autenticarusuario == "Joshua@gmail.com" && $autenticarsenha == 12345 ) {
                   
                    echo "Usuário e senha corretos.";

               } elseif ($autenticarusuario == "Joshua@gmail.com" && $autenticarsenha != 12345) {
                    
                    echo "Usuário correto.<br>";
                    echo "Senha Inválida.";

                } elseif ($autenticarusuario != "Joshua@gmail.com" && $autenticarsenha == 12345) { 

                    echo "Usuário Incorreto.<br>";
                    echo "Senha Correta.";
                    
                } elseif ($autenticarusuario == "Joshua@gmail.com") {
                    
                    echo "Usuário correto";

                } elseif ($autenticarsenha == 12345) {

                    echo "Senha Correta.";    

                } else {
                    echo "Autenticação Falhou.<br>";
                    echo "Usuário e senha incorreto.";
                    
                }


            ?><br><br>
            <a href="index.php">Inicio</a>

        </section>



    </body>
</html>
