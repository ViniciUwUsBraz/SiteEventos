<?php
    if(isset($_POST['senha']) && isset($_POST['email']) && isset($_POST['nome'])){
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $nome = $_POST['nome'];

        if($senha==null || $email==null || $nome==null){
            header("Location: cadastrar.php?erro=1");
        }else{
            include_once("conexao.php");
            if(isset($_POST['evento'])){
                $sql = "INSERT INTO usuarios (Evento, Nome, Senha, Email) VALUES (1,'$nome','$senha','$email')";
            }else{
                $sql = "INSERT INTO usuarios (Evento, Nome, Senha, Email) VALUES (0,'$nome','$senha','$email')";
            }
            $result = mysqli_query($conexao,$sql);
            header("Location: login.php");
        }
    }
?>