<?php 
defined('CONTROL') or die ('Acesso NEGADO!');
session_destroy();
header('Location:/../public/index.php');
exit();

?>
