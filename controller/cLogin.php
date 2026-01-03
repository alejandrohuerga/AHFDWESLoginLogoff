<?php 
    require_once 'core/231018libreriaValidacion.php'; // Importación de la libreria de validación.
    require_once 'model/UsuarioPDO.php'; // Importamos la clase UsuarioPDO.

    // Si pulsa el boton volver , volvemos a la pagina anterior.
    if (isset($_REQUEST["cancelar"])) {
        $_SESSION['paginaEnCurso']='inicioPublico';
        header("location: indexLoginLogoff.php");  
        exit;
    }

    define("OBLIGATORIO",1); // CONSTANTE CON VALOR 1 QUE INDICA SI UN CAMPO ES OBLIGATORIO.

    $entradaOK=true; // Variable booleana para validar los datos del formulario.

    $aErrorres=[    // Array de errores para almacenar los distintos errores.
        'CodUsuario' => null,
        'Password' => null
    ];


    if (isset($_REQUEST["entrar"])) { // Si el usuario pulsa iniciar sesión entonces:
        // Validamos los datos del formulario.
        $aErrores['CodUsuario'] = validacionFormularios::comprobarAlfabetico($_REQUEST['usuario'],100,0,OBLIGATORIO);
        $aErrores['Password'] = validacionFormularios::comprobarAlfabetico($_REQUEST['password'],255,1,OBLIGATORIO);

        // Validamos si el usuario existe en la base de datos, para ello llamamos a la función validar usuario y le pasamos el usuario y la password.
        $oUsuario=UsuarioPDO::validarUsuario($_REQUEST['usuario'],$_REQUEST['password']);

        if(!isset($oUsuario)){ // Si la función nos devuelve null significa que el usuario no existe.
            $aErrores['CodUsuario'] = "El código no existe en la base de datos"; // Guardamos el error en el array de errores.
        }

        foreach($aErrores as $valor){ // Recorremos el array de errores para ver si hay algún error.
            if(!empty($valor)){
                $entradaOK = false; // Si hay algún error entradaOK sera falso.
                unset($_REQUEST);  // Vaciamos los campos.
            }
        }

    }else{ // Mientras el usuario no le haya dado a iniciar sesión entradaOk sera falso.
        $entradaOK = false; // Es falso para no permitir al usuario entrar.
    }

    if($entradaOK){ // Si no hay errores $entradaOk seguira valiendo true.
        $_SESSION['fechaHoraUltimaConexionAnterior'] = $oUsuario -> getFechaHoraUltimaConexion(); // Guardamos en $SESSION la fecha y hora del $oUsuario viejo.
        $_SESSION['usuarioDAW202LoginLogoff'] = $oUsuario; // Cargamos el nuevo usuario en $_SESSION.

        $_SESSION['paginaEnCurso'] = $controller['incioPrivado']; //Cambio la página en curso a inicio privado para poder entrar.

        header('Location: indexLoginLogoff.php'); // Recargo el index.
        exit;
    }

// cargamos el layout principal, y cargará cada página a parte de la estructura principal de la web
require_once $view['layout'];
?>