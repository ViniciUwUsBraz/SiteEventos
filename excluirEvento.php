<?php
    session_start();
    if($_SESSION['logado']==0){
        header("Location: index.php");
    }
    include_once("conexao.php");
    $idEvento = $_GET['id'];
    
    $sql = "DELETE FROM eventos where ID_Evento=$idEvento";
    $result = $conexao->query($sql);

    header("Location: index.php");
?>