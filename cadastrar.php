<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logar</title>
</head>
<body>
    <style>
        .a{
            margin-left: auto;
        }

        body{
            align-items: center;
            justify-content: center;
            display: flex;
            height: 100vh;
        }

        .erro p{
            margin-top: 10px;
            background-color: #F08080;
            padding: 4px;
            border-radius: 10px;
            color: red;
        }

    </style>
    <div class="cabecalho">
        <div class="cabeLogo">
            <img src="/imagens/ingresso.png" alt="">
            <h1>MeuIngresso</h1>
        </div>
        <div class="a">
            <a href="login.php">Logar</a>
            <a href="index.php?logado=0">Home</a>
        </div>
    </div>

    <div class="caixaCadastro">
        <div class="formulario">
            <form action="verificaCadastro.php" method="post">
                Nome: <input type="text" name="nome" id="nome">
                Email:<input type="email" name="email" id="email">
                Senha:<input type="password" name="senha" id="senha">
                <br><br>
                Você cria eventos? <input type="checkbox" name="evento" value="1">
                <br><br>
                <input class="botaoForm" type="submit" value="Cadastrar">
            </form>
        </div>
        <div class="erro">
            <?php
            if(isset($_GET["erro"])){
                echo "<p>Favor preencher todos os campos</p>";
            }
            ?>
        </div>
    </div>
    
</body>
</html>