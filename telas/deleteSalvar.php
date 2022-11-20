<?php

    if(!empty($_GET['idProdutos'])) {
        include_once('../config/conexao.php');

        $idProdutos = $_GET['idProdutos'];

        $sqlSelect = "SELECT * FROM produtos WHERE idProdutos=$idProdutos";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0){
            $sqlDeletar = "DELETE FROM produtos WHERE idProdutos=$idProdutos";
            $resultDeletar = $conexao->query($sqlDeletar);
        } 
    }
    header('Location: deletar.php');
  

?>