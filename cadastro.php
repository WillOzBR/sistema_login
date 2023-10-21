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
    <title>Tela de Cadastro</title>
</head>
<body>
    <div class="titulo">
        <h1 id="nome">Tela de Cadastro</h1>
        <h1 id="autor">Andrey Pichuti | Daniel Borges | William Cellegin</h1>
    </div>
    <div class="container11">   
        <div class="container2">    
            <div class="formulario">
                <form method="post" action="cadastro.php">
                    <input type="text" id="meunome" name="meunome" placeholder="Digite seu Nome">
                    <input type="text" id="email" name="email" placeholder="Digite seu Email">
                    <input type="password" id="senha" name="senha" placeholder="Digite sua Senha">
                    <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF">
                    <input type="text" id="cep" name="cep" placeholder="Digite seu CEP">
                    <input type="text" id="endereco" name="endereco" placeholder="Digite seu Endereço">
                    <input type="text" id="numero" name="numero" placeholder="Digite seu Número">
                    <input type="text" id="cidade" name="cidade" placeholder="Digite sua Cidade">
                    <input type="text" id="celular" name="celular" placeholder="Digite seu Celeular">
                    <div class="inp">
                        <input type="submit" id="salvar" name="salvar" value="Salvar">
                </form>  
                <form action="login.php"> 
                        <input type="submit" id="cancelar" name="cancelar" value="Cancelar">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer2">
        <p>4°B Desenvolvimento de Sistemas</p> 
        <p>Fundação Instituto Tecnológico de Osasco</p> 
        <p>FITO</p> 
        <p>Outubro/2023</p>
    </div>
</body>
</html>