<?php
    include("conexao.php");
    session_start();
    if(isset($_SESSION['login'])) { //Sistema que pega nome do usuário
        $login = $_SESSION['login'];
        $query = "SELECT nome FROM cadastro WHERE email = '$login'";
        $result = mysqli_query($conn, $query);

        if($result) {
            $row = mysqli_fetch_assoc($result); // Recupera a primeira linha do resultado
            $nome = $row['nome']; // Obtém o valor do nome
        }
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            background-image: linear-gradient(to bottom right, #5d1072, #095b66);
            color:white;
        }

        header {
            background-color: purple;
            color: #fff;
            text-align: center;
            padding: 20px;
            
        }

        nav {
            background-color: #444;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            font-size: 36px;
        }

        p {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bem-vindo à Página HOME</h1>
    </header>
    <div class="container">
    <p>Olá, <?php echo($nome); ?>! Bem-vindo à sua página HOME.</p>
    </div>
</body>
</html>
