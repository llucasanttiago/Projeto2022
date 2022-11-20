<?php
    session_start();
    include_once('../config/conexao.php');

    $sql = "SELECT * FROM produtos ORDER BY idProdutos DESC";
    $result = $conexao->query($sql);

    if(!empty($_GET['search'])){
        $data = $_GET['search'];
        $sql = "SELECT * FROM produtos WHERE idProdutos LIKE '%$data%' OR nome LIKE '%$data%' ORDER BY idProdutos DESC";
    } else {
        $sql = "SELECT * FROM produtos ORDER BY idProdutos DESC";
    }
    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Produtos</title>
</head>
<body>
    <div class="pesquisar">
        <input type="search" id="pesquisar">
        <button onclick="searchData()">Pesquisar</button>
    </div>
    
    <a href="sistema.php"><button class="btn-login">Voltar</button></a>
    
    <main>
        <table border="1">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Marca</th>
                    <th>Preço</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($dados = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>" . $dados['idProdutos'] . "</td>";
                        echo "<td>" . $dados['nome'] . "</td>";
                        echo "<td>" . $dados['marca'] . "</td>";
                        echo "<td>" . $dados['preco'] . "</td>";
                        echo "<td>" . $dados['descricao'] . "</td>";
                    }
                ?>
            </tbody>
        </table>
    </main>
</body>

<script>
    var search = document.getElementById('pesquisar');
    function searchData(){
        window.location = 'consultar.php?search='+search.value;
    }
</script>
</html>