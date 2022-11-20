<?php
    session_start();
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
</head>
<body>
    <?php
        echo "<h2>Bem vindo <i>$logado</i><h2>";
    ?>
    <div class="sair">
        <a href="../config/deslogar.php">Sair</a><br><br>
    </div>

    <section>
        <div class="pesquisar-produto">
            <a href="consultar.php">Consultar</a>
        </div>

        <div class="cadastro-produto">
            <a href="cadastroProdutos.php">Cadastrar Produtos</a>
        </div>

        <div class="alterar-produto">
            <a href="alterar.php">Alterar</a>
        </div>

        <div class="deletar-produto">
            <a href="deletar.php">Deletar</a>
        </div>
    </section>
    
</body>
</html>