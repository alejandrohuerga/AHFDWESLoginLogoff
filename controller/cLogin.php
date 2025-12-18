<?php 

// Si pulsa el boton volver , volvemos a la pagina anterior.
if (isset($_REQUEST["cancelar"])) {
    $_SESSION['paginaEnCurso']='inicioPublico';
    header("location: indexLoginLogoff.php");  
    exit;
}

// Si pulsa iniciar Sesión, entramos en Inicio privado.
if (isset($_REQUEST["entrar"])) {
    $_SESSION['paginaEnCurso']='inicioPrivado';
    header("location: indexLoginLogoff.php");  
    exit;
}

// cargamos el layout principal, y cargará cada página a parte de la estructura principal de la web
require_once $view['layout'];
?>