<?php
    if(isset($_POST['Nome']) and isset($_POST['Autor']) and isset($_POST['Ano']))
    {
        $saving_data = fopen("infolivros.txt", "a");
        fwrite($saving_data, "\n" . "Nome do livro: " . $_POST['Nome']);
        fwrite($saving_data, "\n" . "Autor do livro: " .  $_POST['Autor']);
        fwrite($saving_data, "\n" . "Ano de publicação: " .  $_POST['Ano']);
        fwrite($saving_data, "\n");
        fflush($saving_data);
        fclose($saving_data);

        header("location: registro.php");
        exit;
    }else
    {
        echo "Erro, tente novamente. <br>";
        header("location: registro.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrando usuário</title>
    </head>
    <body>
        <br><br>
        <a href="leitura.php">Veja todos os livros</a>
    </body>
</html>