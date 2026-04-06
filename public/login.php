<?php 
defined('CONTROL') or die("Acesso NEGADO!");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario_digitado = $_POST['user'] ?? null;
    $senha = $_POST['pass'] ?? null;
    $erro = null;


if(empty($usuario_digitado) || empty($senha)){
    $erro = "Usuario e senha são <br> obrigatórios";
}
    if(empty($erro)){
        $usuarios = require __DIR__. '/../data/user.php';
        foreach($usuarios as $user){
            if($user['usuario'] == $usuario_digitado && password_verify($senha, $user['senha'])){
                $_SESSION['user'] = $usuario_digitado;
                header('Location: ./index.php?rota=home');
            }
        }$erro = "Usuario ou senha inválidos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'rel='stylesheet'> 
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    
    <main class="all">
        <form action="./index.php?rota=login" method="POST">
            <h1>Login</h1>
                <div class="input-box"><input placeholder="Usuário" type="email" name="user">
                    <i class="bx bxs-user"></i></div>

                <div class="input-box"><input placeholder="Senha" type="password" name="pass">
                    <i class="bx bxs-lock-alt"></i></div>

                <div class="senha">
                    <label><input type="checkbox" name="rememberbox">Lembrar senha</label></div>  

                <button type="submit" class="login">Entrar</button>
               
        </form>
        <div class="cadastro"><p>Nao tem uma conta? <a href="/public/register.php?rota=register">Cadastre-se</a></p></div>
        
    </main>
    
        <?php if(!empty($erro)) :?>
            <div class="erro">
                <?= $erro ?>
            </div>
        <?php endif;?>
</body>
</html>