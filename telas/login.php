<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="css/style.css" rel="stylesheet">
    <title>Outfits</title>
</head>
<body>
    <main class="tela-login">
        <a href="../index.php" class="cabecalho-item"><h1>Voltar</h1></a>
        <h2>Login</h2>
        <form action="../config/configLogin.php" method="POST">
            <div class="textfield">
                <input type="text" name="email" placeholder="Email">
            </div>

            <div class="textfield">
                <input type="password" name="senha"    placeholder="Senha"  >
            </div>

            <input type="submit" name="submit" value="Enviar">
            
        </form>
        <a href="cadastro.php"><button class="btn-login">Cadastrar</button></a>
    </main>
</body>
</html>