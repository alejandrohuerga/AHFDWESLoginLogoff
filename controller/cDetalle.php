<?php
if(isset($_REQUEST['cerrarSesion'])){
    $_SESSION['paginaEnCurso']='inicioPublico';
    // Destruye la sesión
    session_destroy();
    header('Location: ../indexLoginLogoff.php');
    exit;
}
if(isset($_REQUEST['volver'])){
    $_SESSION['paginaEnCurso']=$_SESSION['paginaAnterior'];
    header('Location: indexLoginLogoff.php');
}
require_once $view['layout'];

?>