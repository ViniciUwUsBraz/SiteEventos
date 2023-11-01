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
            <a href="cadastrar.php">Cadastrar</a>
            <a href="index.php?logado=0">Home</a>
        </div>
    </div>

    <div class="caixaLogin">
        <div class="formulario">
            <form action="verificaLogin.php" method="post">
                Email:<input type="email" name="email" id="email">
                Senha:<input type="password" name="senha" id="senha">
                <br><br>
                <input class="botaoForm" type="submit" value="Logar">
            </form>
        </div>
        <div class="erro">
            <?php
            session_start();
            if(isset($_SESSION['erro'])){
                if($_SESSION['erro']==1){
                echo "<p>Favor preencher todos os campos</p>";
                }else{
                    echo "<p>Campo(s) invalido(s)</p>";
                }
            }
            ?>
        </div>
    </div>

    
    
</body>
</html>