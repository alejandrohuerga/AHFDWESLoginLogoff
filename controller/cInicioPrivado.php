<?php
    if(isset($_REQUEST['cerrarSesion'])){
        $_SESSION['paginaEnCurso']='inicioPublico';
    }
    
    if(isset($_REQUEST['detalle'])){
        $_SESSION['paginaEnCurso']='detalle';
    }

    require_once $view['layout'];
?>