<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento</title>
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

        .caixaEvento{
            width: 200px;
            height: 220px;
            background-color:rgba(183, 121, 219, 0.527);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            padding: 20px;
        }

        .caixaEvento input{
            margin: 4px;
        }        
        

    </style>

    <div class="cabecalho">
        <div class="cabeLogo">
            <img src="/imagens/ingresso.png" alt="">
            <h1>MeuIngresso</h1>
        </div>

        <div class="cabeBotao"> 
            <ul>
                <?php
                session_start();
                if(isset($_SESSION['logado'])){
                    if($_SESSION['logado']==1){
                        if(isset($_SESSION['evento']) && $_SESSION['evento']==1){
                            echo "<li><a href='index.php'>Home</a></li>";
                        }
                        echo "<li><a href='ingressos.php'>Ingressos</a></li>";
                        echo "<li><a href='deslogar.php'>Desconectar</a></li>";
                    }
                }else{
                    echo "<li><a href='login.php'>Logar</a></li>";
                    echo "<li><a href='cadastrar.php'>Cadastrar</a></li>";
                }             
                ?>
            </ul>
        </div>
    </div>

    <div class="caixaEvento">
        <div class="formulario">
            <form action="verificaEvento.php" method="post">
                Nome Evento<input type="text" name="nomeEvento" id="nomeEvento">
                Cidade <input type="text" name="cidade" id="cidade">
                Data <br><input type="date" name="data" id="data">
                <br>Preço<input type="text" name="preco" id="preco">
                <br>
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