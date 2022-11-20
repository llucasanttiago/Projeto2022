<?php

    if(isset($_POST['submit'])) {
        include_once('../config/conexao.php');

       $nome = $_POST['nome'];
       $marca = $_POST['marca'];
       $preco = $_POST['preco'];
       $descricao = $_POST['descricao'];

       $result = mysqli_query($conexao, "INSERT INTO produtos(nome,marca,preco,descricao) VALUES ('$nome','$marca','$preco','$descricao')");
        
       
       header('Location: sistema.php');
        
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
        <form action="cadastroProdutos.php" method="POST">
            <fieldset>
                <div class="textfield">
                    <input type="text" name="nome" id="nome" placeholder="Nome"  required>
                </div>

                <div class="textfield">
                    <input type="text" name="marca" id="marca" placeholder="marca" required>
                </div>

                <div class="textfield">
                    <input type="text" name="preco" id="preco" placeholder="preco" required>
                </div>

                <div class="textfield">
                    <input type="descricao" name="descricao" id="descricao" placeholder="descricao"  required>
                </div>             
                
                <input type="submit" name="submit" id="submit">
                
                <a href="sistema.php" class="cabecalho-item"><h1>Voltar</h1></a>
            </fieldset>
        </form>
    </div>
</body>
</html>