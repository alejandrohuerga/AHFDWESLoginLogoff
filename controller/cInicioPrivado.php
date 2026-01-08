<?php
    require_once 'model/Usuario.php'; // Importamos el objeto Usuario

    // Código que se ejecuta al pulsar el botón cerrar sesión
    if(isset($_REQUEST['cerrarSesion'])){
        $_SESSION['paginaEnCurso']='inicioPublico';
        header("location: indexLoginLogoff.php");  
        exit;
    }
    
    // Código que se ejecuta al pulsar el boton detalle.
    if(isset($_REQUEST['detalle'])){
        $_SESSION['paginaEnCurso']='detalle';
        header("location: indexLoginLogoff.php");  
        exit;
    }
    
    $aDatosUsuario=[ // Array que almacena los datos que obtenemos del objeto usuario.
        "nombreUsuario" => $_SESSION['usuarioDAW202LoginLogoff'] -> getDescUsuario() ,
        "numeroConexiones" => $_SESSION['usuarioDAW202LoginLogoff'] -> getNumAccesos(),
        "ultimaConexion" => $_SESSION['usuarioDAW202LoginLogoff'] -> getFechaHoraUltimaConexion()
    ];
    
    require_once $view['layout'];
?>