<?php
    include_once('../config/conexao.php');

    if(isset($_POST['update'])){
        $idProdutos = $_POST['idProdutos'];
        $nome = $_POST['nome'];
        $marca = $_POST['marca'];
        $preco = $_POST['preco'];
        $descricao = $_POST['descricao'];

        $sqlUpdate = "UPDATE produtos SET nome='$nome',marca='$marca',preco='$preco',descricao='$descricao' WHERE idProdutos='$idProdutos'";

        $result = $conexao->query($sqlUpdate);
    }

    header('Location: alterar.php');
?>