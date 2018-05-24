<?php

    $conexao = mysqli_connect("localhost", "root", "root");
    mysqli_select_db($conexao, "tcc");
?>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro</title>
    </head>
    <body>
        <?php
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            $inserir = "INSERT INTO usuario (cod_usuario, nome, email, senha) VALUES (NULL, '$nome', '$email', '$senha');";
            mysqli_query($conexao, $inserir) or die (mysqli_error($conexao));
            echo"Você foi cadastrado com sucesso. Clique <a href='login.html'>aqui</a> para fazer log-in.";
        ?>
    </body>
</html>