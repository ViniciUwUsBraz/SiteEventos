<?php
    if(isset($_POST['preco']) && isset($_POST['cidade']) && isset($_POST['data']) && isset($_POST['nomeEvento'])){
        $preco = $_POST['preco'];
        $cidade = $_POST['cidade'];
        $data = $_POST['data'];
        $nome = $_POST['nomeEvento'];

        if($preco==null || $cidade==null || $data==null || $nome==null){
            header("Location: eventos.php?erro=1");
        }else{
            include_once("conexao.php");
            session_start();
            $idEvento = $_SESSION['idSession'];
            $sql = "INSERT INTO eventos (Nome_Evento, Cidade, Preco, Data, ID_Usuario) VALUES ('$nome','$cidade','$preco','$data','$idEvento')";
            $result = mysqli_query($conexao,$sql);
            header("Location: index.php");
        }
    }
?>