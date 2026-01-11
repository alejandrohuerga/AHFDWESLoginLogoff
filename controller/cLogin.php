<?php
    require_once 'core/231018libreriaValidacion.php'; // Importamos la libreria de validación.
    
    
    // Arrays para errores y respuestas
    $aErrores = [
        'usuario' => null,
        'password' => null
    ];

    $aRespuestas = [
        'usuario' => '',
        'password' => ''
    ];

    // Variable para controlar si la entrada es correcta
    $entradaOK = true;

    // Si pulsa el boton volver , volvemos a la pagina anterior.
    if (isset($_REQUEST["cancelar"])) {
        $_SESSION['paginaEnCurso']='inicioPublico';
        header("location: indexLoginLogoff.php");  
        exit;
    }

    // Si pulsa iniciar Sesión, entramos en Inicio privado.
    if (isset($_REQUEST["entrar"])) {
        // Guardar página anterior
        $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
        
        // Validar los campos del formulario
        $aErrores['usuario'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['usuario'], 255, 0, 0);
        $aErrores['password'] = validacionFormularios::validarPassword($_REQUEST['password'], 20, 2, 1, 1);
        
        // Guardar las respuestas para rellenar el formulario si hay algun error
        $aRespuestas['usuario'] = $_REQUEST['usuario'];
        $aRespuestas['password'] = $_REQUEST['password'];
        
        // Verificar si hay errores de validación
        foreach ($aErrores as $valorCampo=>$msjError) {
            if ($msjError !=null) {
                $entradaOK = false;
            }
        }
        
        // Si la validación es correcta, validar con la BD
        if ($entradaOK) {
            $oUsuario = UsuarioPDO::validarUsuario($_REQUEST['usuario'], $_REQUEST['password']);
            if ($oUsuario === null) {
                $entradaOK = false;
            } else {
                // Login correcto
                $oUsuario=UsuarioPDO::registrarUltimaConexion($oUsuario); // Actualizamos la última conexión anterior.
                $_SESSION['usuarioDAW202LoginLogoff'] = $oUsuario;
                $_SESSION['paginaEnCurso'] = 'inicioPrivado';
                header('Location: indexLoginLogoff.php');
                exit;
            }
        }
    }else {
        // Si no se ha enviado el formulario
        $entradaOK = false;
    }

    // cargamos el layout principal, y cargará cada página a parte de la estructura principal de la web
    require_once $view['layout'];
?>