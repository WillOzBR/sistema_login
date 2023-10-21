<?php 
    include_once("conexao.php"); // Inclusão da conexão
    session_start();

    if(isset($_POST['meunome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['cpf']) && isset($_POST['cep']) && isset($_POST['endereco']) && isset($_POST['numero']) && isset($_POST['cidade']) && isset($_POST['celular']) && isset($_POST['datanasc'])) { //verifica se a variável foi definida. Se verdadeiro, continua   
        $nome = $_POST['meunome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];
        $cep = $_POST['cep'];
        $endereco = $_POST['endereco'];
        $numero = $_POST['numero'];
        $cidade = $_POST['cidade'];
        $celular = $_POST['celular'];
        $datanasc = $_POST['datanasc'];
    } else {
        echo "Preencha todos os campos";
    }


    if(isset($_POST['salvar'])){ //verifica se a variável foi definida. Se verdadeiro, continua
        if($nome != NULL && $email != NULL && $senha != NULL && $cpf != NULL && $cep != NULL && $endereco != NULL && $numero != NULL && $cidade != NULL && $celular != NULL && $datanasc != NULL){ //caso a variável texto não for nula, permite a inserção de dados
            $criaCadastro = "INSERT INTO cadastro (nome, email, senha, cpf, endereco, numero, cidade, cep, celular, data_nascimento) VALUES('$nome', '$email', '$senha', '$cpf', '$endereco', '$numero', '$cidade', '$cep', '$celular', '$datanasc')";   //query para inserção de registros na tabela
            $criaCadastroQ = mysqli_query($conn, $criaCadastro);
            if($criaCadastroQ){ //se a query for executada com sucesso, exibe mensagem
                echo "<script>alert('Cadastro realizado com sucesso!');</script>";
                header('Location: login.php');
            }else{ //se a query não for executada com sucesso, exibe mensagem
                echo "<script>alert('Erro ao realizar cadastro!');</script>";
            }
        }
    }


    ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Cadastro</title>
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
                    <input type="text" id="celular" name="celular" placeholder="Digite seu Celular">
                    <input type="text" id="datanasc" name="datanasc" placeholder="Digite sua data de nascimento">
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