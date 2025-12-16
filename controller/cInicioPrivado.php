<?php
    if(isset($_REQUEST['cerrarSesion'])){
        $_SESSION['paginaEnCurso']='inicioPublico';
        //Destruye la sesión
        session_destroy();
        header('Location: ../indexLoginLogoff.php');
        exit;
    }
    
    if(isset($_REQUEST['detalle'])){
        $_SESSION['paginaEnCurso']='detalle';
	    $_SESSION['paginaAnterior']='inicioPrivado';
        header('Location: ../indexLoginLogoff.php');
        exit;
    }
    require_once $view['layout'];
?>