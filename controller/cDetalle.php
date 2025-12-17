<?php
if(isset($_REQUEST['cerrarSesion'])){
    $_SESSION['paginaEnCurso']='inicioPublico';
}

if(isset($_REQUEST['volver'])){
    $_SESSION['paginaEnCurso']=$_SESSION['paginaAnterior'];
}

require_once $view['layout'];

?>