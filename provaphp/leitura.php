<?php
    session_start();
 
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
    {
        header("location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Livros registrados: </title>
    </head>
    <body>
        <h2>  Livros registrados na biblioteca: </h2>
            <?php
                if(file_exists("infolivros.txt"))
                {
                    $saving_data = fopen("infolivros.txt", "r");
                    while(!feof($saving_data))
                    {
                        echo fgets($saving_data) . "<br>";
                    }
                }else
                {
                    echo "O arquivo não existe <br>";
                    header("location: registro.php");
                }
            ?>
        <br><br>
        <form>
            <div>
                <a href="registro.php">Novo livro</a>
            </div>
        </form>

    </body>
</html>