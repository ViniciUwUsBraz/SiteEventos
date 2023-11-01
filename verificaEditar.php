<?php
    if(isset($_POST['preco']) && isset($_POST['cidade']) && isset($_POST['data']) && isset($_POST['nomeEvento'])){
        $idEvento = $_GET['id'];
        $preco = $_POST['preco'];
        $cidade = $_POST['cidade'];
        $data = $_POST['data'];
        $nome = $_POST['nomeEvento'];

        if($preco==null || $cidade==null || $data==null || $nome==null){
            header("Location: editarEvento.php?erro=1&id=$idEvento");
        }else{
            include_once("conexao.php");
            $sql = "UPDATE eventos SET Nome_Evento='$nome',Cidade='$cidade',Preco='$preco',Data='$data' WHERE ID_Evento=$idEvento";
            $result = mysqli_query($conexao,$sql);
            header("Location: index.php");
        }
    }

?>