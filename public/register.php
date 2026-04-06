<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
    <link rel="stylesheet" href="/style/style2.css">
</head>
<body>
    <main class="all">
        <h1>Cadastro de Usuário</h1>
        <form class="formu" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" >
            <div class="input-box"><input placeholder="Seu Nome" type="text" name="user"></div>
            <div class="input-box"><input placeholder="Informe seu email" type="email" name="email"></div>
            <div class="senha"><input placeholder="Senha" type="password" name="pass"></div>
            <div class="confpass"><input placeholder="Confirme a senha" type="password" name="confpass"></div>
            <button type="submit" class="login">Cadastrar-se</button>
            </form>
            <div class="log"><p>Já tem uma conta? <a href="./src/index.php?rota=home">Entrar</a></p></div>
        
    </main>
</body>
</html>