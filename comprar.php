<?php
    session_start();
    include_once("conexao.php");
    $sql = "SELECT * FROM usuarios WHERE email='$_SESSION[email]' and senha='$_SESSION[senha]'";
    $result = $conexao->query($sql);
    $idUsuario = $_SESSION["idSession"];
    $idEvento = $_GET['id'];
    $sql = "INSERT INTO ingressos (ID_Usuario, ID_Evento) VALUES ('$idUsuario','$idEvento')";
    $result = mysqli_query($conexao,$sql);
    header("Location: index.php")
?>