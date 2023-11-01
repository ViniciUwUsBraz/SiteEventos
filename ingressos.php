<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <?php
        session_start();
        if($_SESSION['logado']==0){
            header("Location: index.php");
        }
    ?>

    <div class="cabecalho">
        <div class="cabeLogo">
            <img src="/imagens/ingresso.png" alt="">
            <h1>MeuIngresso</h1>
        </div>

        <div class="cabeBotao"> 
            <ul>
                <?php
                if(isset($_SESSION['logado'])){
                    if($_SESSION['logado']==1){
                        if(isset($_SESSION['evento']) && $_SESSION['evento']==1){
                            echo "<li><a href='eventos.php'>Evento</a></li>";
                        }
                        echo "<li><a href='index.php'>Home</a></li>";
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


    <div class="eventos">
        <h2>Meus ingressos</h2>
            
            <?php
                include_once("conexao.php");
                $sql = "SELECT * FROM ingressos WHERE ID_Usuario=$_SESSION[idSession]";
                $result = $conexao->query($sql);

                foreach($result as $ingresso){
                    echo "<div class='ingresso'>";
                    echo "<div class='info'>";
                    echo "<p>ID do ingresso:$ingresso[ID_Ingresso]</p>";
                    echo "<p>ID do evento:$ingresso[ID_Evento]</p>";
                    echo "</div>";
                    echo "<div class='botao'>";
                    echo "<p><a class='excluir' href='excluirIngresso.php?idIngresso=$ingresso[ID_Ingresso];'>Excluir</a></p>";
                    echo "</div>";
                    echo "</div>";
                }
            ?>
    </div>



</body>
</html>