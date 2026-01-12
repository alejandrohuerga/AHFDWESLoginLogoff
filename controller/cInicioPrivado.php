<?php
    

    // Código que se ejecuta al pulsar el botón cerrar sesión
    if(isset($_REQUEST['cerrarSesion'])){
        $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
        // Si se pulsa le damos el valor a la página solicitada a la variable $_SESSION
        $_SESSION['paginaEnCurso']='inicioPublico';
        header("location: indexLoginLogoff.php");  
        exit;
    }
    
    // Código que se ejecuta al pulsar el boton detalle.
    if(isset($_REQUEST['detalle'])){
        $_SESSION['paginaAnterior'] =$_SESSION['paginaEnCurso'];
        $_SESSION['paginaEnCurso']='detalle';
        header("location: indexLoginLogoff.php");  
        exit;
    }
    
    $avInicioPrivado=[ // Array que almacena los datos que obtenemos del objeto usuario.
        "descUsuario" => $_SESSION['usuarioDAW202LoginLogoff'] -> getDescUsuario(),
        "numAccesos" => $_SESSION['usuarioDAW202LoginLogoff'] -> getNumAccesos(),
        "fechaHoraUltimaConexionAnterior" => $_SESSION['usuarioDAW202LoginLogoff'] -> getFechaHoraUltimaConexionAnterior()
    ];
    
    require_once $view['layout'];
?>