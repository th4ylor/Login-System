<?php 
session_start();
define('CONTROL' , true);

$usuario_logado = $_SESSION['user'] ?? null ;

if(empty($usuario_logado)){
    $rota='login';
}else{
    $rota = $_GET['rota'] ?? 'home';
}
if(!empty($usuario_logado) && $rota == 'login'){
    $rota = 'home';
}
$rotas = [
    'register' => 'public/register.php',
    'login' => 'public/login.php',
    'home' => 'public/homepage.php',
    'logout' => 'src/logout.php'
];
if(!key_exists($rota, $rotas)){
    die('Acesso Negado!');
}else{
    require_once $rotas[$rota];
}
?>