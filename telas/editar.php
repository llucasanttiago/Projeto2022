<?php

    if(!empty($_GET['idProdutos'])) {
        include_once('../config/conexao.php');

        $idProdutos = $_GET['idProdutos'];

        $sqlSelect = "SELECT * FROM produtos WHERE idProdutos=$idProdutos";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0){
            while($dados = mysqli_fetch_assoc($result)){
                $nome = $dados['nome'];
                $marca = $dados['marca'];
                $preco = $dados['preco'];
                $descricao = $dados['descricao'];
            }
        } else {
            header('Location: alterar.php');
        }
    } else {
        header('Location: alterar.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outfits</title>
</head>
<body>
    <div class="box">
        <form action="salvarEdite.php" method="POST">
            <fieldset>
                <div class="textfield">
                    <label>Nome: </label>
                    <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" placeholder="Nome"  required>
                </div>

                <div class="textfield">
                    <label>Marca: </label>
                    <input type="text" name="marca" id="marca" value="<?php echo $marca ?>" placeholder="marca" required>
                </div>

                <div class="textfield">
                    <label>Preço: </label>
                    <input type="text" name="preco" id="preco" value="<?php echo $preco ?>" placeholder="preco" required>
                </div>

                <div class="textfield">
                    <label>Descriçao: </label>
                    <input type="descricao" name="descricao" id="descricao" value="<?php echo $descricao ?>" placeholder="descricao"  required>
                </div>             
                
                <input type="hidden" name="idProdutos" value="<?php echo $idProdutos?>">
                <input type="submit" name="update" id="update">
                <a href="alterar.php" class="cabecalho-item"><h1>Voltar</h1></a>
            </fieldset>
        </form>
    </div>
</body>
</html>