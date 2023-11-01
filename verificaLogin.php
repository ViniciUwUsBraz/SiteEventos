<?php
    if(isset($_POST['senha']) && isset($_POST['email'])){
        session_start();
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        if($senha==null || $email==null){
            $_SESSION['erro']=1;
            header("Location: login.php");
        }else{
            include_once("conexao.php");
            $sql = "SELECT * FROM usuarios WHERE email='$email' and senha='$senha'";
            $result = $conexao->query($sql);
            
            if(mysqli_num_rows($result)!=0){
                $_SESSION['email']=$email;
                $_SESSION['senha']=$senha;
                $_SESSION['logado']=1;
                
                $evento = mysqli_fetch_assoc($result);
                $_SESSION['evento']= $evento['Evento'];
                $_SESSION['idSession']= $evento['ID_Usuario'];

                header("Location: index.php");
            }else{
                $_SESSION['erro']=2;
                header("Location: login.php");
            }
            
        }
    }
?>