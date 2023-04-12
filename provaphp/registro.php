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
        <title> Cadastro de livros da Fatec/Araras </title>
    </head>
    <body>
        <h2> Registro de novos livros </h2>
        <br>
        <form action="salvando.php" method="post">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="Nome" name="Nome" placeholder="Nome do livro: "><br><br>
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="Autor" name="Autor" placeholder="Autor do livro: "><br><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="Ano" name="Ano" placeholder="Ano de publicação: "><br><br>
                </div>
               
            <input type="submit" value="Registrar livro">
            <a href="logout.php">Logout</a>
            <br><br>
            <a href="leitura.php">Visualizar livros cadastrados</a>
        </form>
    </body>
</html>
