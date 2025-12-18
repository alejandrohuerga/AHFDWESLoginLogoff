<?php

    if(isset($_REQUEST['cerrarSesion'])){
        $_SESSION['paginaEnCurso']='inicioPublico';
        header("location: indexLoginLogoff.php");  
        exit;
    }
    
    if(isset($_REQUEST['detalle'])){
        $_SESSION['paginaEnCurso']='detalle';
        header("location: indexLoginLogoff.php");  
        exit;
    }

    require_once $view['layout'];
?>