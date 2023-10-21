<?php 
include_once("conexao.php"); // Inclusão da conexão
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Cadastro de Texto</title>
</head>
<body>
    <div class="titulo">
        <h1 id="nome">Tela de Login</h1>
        <h1 id="autor">Andrey Pichuti | Daniel Borges | William Cellegin</h1>
    </div>
    <div class="container1">    
        <div class="container2">    
            <div class="formulario">
                <form method="post" action="index.html">
                    <input type="text" id="login" name="login" placeholder="Digite seu Usuário">
                    <input type="password" id="senha" name="senha" placeholder="Digite sua Senha">
                    <div class="inp">
                        <input type="submit" id="logar" name="logar" value="Login">
                </form>
                <form action="cadastro.php">
                    <input type="submit" id="cadastrar" name="cadastrar" value="Cadastrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>4°B Desenvolvimento de Sistemas</p> 
        <p>Fundação Instituto Tecnológico de Osasco</p> 
        <p>FITO</p> 
        <p>Outubro/2023</p>
    </div>
</body>
</html>