<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>


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
                            echo "<li><a href='eventos.php'>Evento</a></li>";
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

    <div class="eventos">
        <h2>Eventos</h2>
        
                <?php     
                    include_once("conexao.php"); 
                    $sql = "SELECT * FROM eventos";
                    $result = $conexao->query($sql);

                    foreach($result as $evento){
                        echo "<div class='evento'>";
                        echo "<div class='info'>";
                        echo "<p>Evento:$evento[Nome_Evento]</p>";
                        echo "<p>Cidade:$evento[Cidade]</p>";
                        echo "<p>Preço:R$$evento[Preco]</p>";
                        echo "<p>Data:$evento[Data] </p>";
                        echo"</div>";
                        echo "<div class='botao'>";
                        if(isset($_SESSION['logado']) && $_SESSION['logado']==1){
                            echo "<p><a href='comprar.php?id=$evento[ID_Evento]'>Comprar</a></p>";
                        }
                        if(isset($_SESSION['evento']) && $_SESSION['evento']==1){
                            if($evento['ID_Usuario']==$_SESSION['idSession']){
                                
                                echo "<p><a href='editarEvento.php?id=$evento[ID_Evento]'>Editar</a></p>";
                                echo "<p><a class='excluir' href='excluirEvento.php?id=$evento[ID_Evento]'>Excluir</a></p>";
                                
                            }
                        }
                        echo "</div>";
                        echo"</div>";
                    }
                ?>
        
    </div>



</body>
</html>