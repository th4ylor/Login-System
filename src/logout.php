<?php 
defined('CONTROL') or die ('Acesso NEGADO!');
session_destroy();
header('Location: ./index.php?rota=login');
?>
