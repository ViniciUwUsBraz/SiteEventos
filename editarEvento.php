<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['logado'])){
            if($_SESSION['evento']!=1){
                header("Location: index.php");
            }
        }
    ?>

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
        <div class="a">
            <a href="login.php">Logar</a>
            <a href="index.php?logado=0">Home</a>
        </div>
    </div>

    <div class="caixaEvento">
        <div class="formulario">
            <?php
            if(isset($_GET['id'])){
                $idEvento = $_GET['id'];
            }
            echo "<form action='verificaEditar.php?id=$idEvento' method='post'>";
            
            ?>
                Nome Evento<input type="text" name="nomeEvento" id="nomeEvento">
                Cidade <input type="text" name="cidade" id="cidade">
                Data <br><input type="date" name="data" id="data">
                <br>Preço<input type="text" name="preco" id="preco">
                <br>
                <input class="botaoForm" type="submit" value="Editar">
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