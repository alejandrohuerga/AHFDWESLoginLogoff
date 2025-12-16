<?php 

if (isset($_REQUEST["cancelar"])) {
    $_SESSION['paginaEnCurso']=$_SESSION['paginaAnterior'];
    header('location: indexLoginLogoff.php');
    exit;
}


if (isset($_REQUEST["entrar"])) {
    $_SESSION['paginaEnCurso']='inicioPrivado';
    header('location: indexLoginLogoff.php');
    exit;
}

// cargamos el layout principal, y cargará cada página a parte de la estructura principal de la web
require_once $view['layout'];
?>