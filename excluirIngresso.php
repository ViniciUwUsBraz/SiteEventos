<?php
    session_start();
    if($_SESSION['logado']==0){
        header("Location: index.php");
    }
    include_once("conexao.php");
    $idIngresso = $_GET['idIngresso'];
    
    $sql = "DELETE FROM ingressos where ID_Ingresso=$idIngresso";
    $result = $conexao->query($sql);

    header("Location: ingressos.php");
?>
