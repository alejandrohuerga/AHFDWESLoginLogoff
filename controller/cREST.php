<?php
    // Si se intenta acceder a la página sin iniciar sesión resirige a la Inicio publico.
    if(empty($_SESSION['usuarioDAW202LoginLogoff'])) {
        $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
        // Redirige a la página de inicio.
        $_SESSION['paginaEnCurso'] = 'inicioPublico';
        header("location: indexLoginLogoff.php");  
        exit;
    }

    // Código que se ejecuta al pulsar cerrar sesión
    if(isset($_REQUEST['cerrarSesion'])){
        $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
        // Si se pulsa le damos el valor a la página solicitada a la variable $_SESSION
        $_SESSION['paginaEnCurso']='inicioPublico';
        header("location: indexLoginLogoff.php");  
        exit;
    }

    // Código que se ejecuta al pulsar el botón volver.
    if(isset($_REQUEST['volver'])){
        $_SESSION['paginaEnCurso']='inicioPrivado';
        header("location: indexLoginLogoff.php");  
        exit;
    }

    // Array que asociativo que almacena los array con las respuestas de la Nasa.
    $aVistaRest=[
        'nasa'=>[], // Array que almacena la información de la Nasa (title,url).
        'aemet' =>[]
    ];

    // Establecemos la fecha actual para la nasa y guardamos en la sesión.
    $_SESSION['nasaFechaActual'] = date('y-m-d');

    /**
     * Verificamos si hemos mandado la fecha para obtener la foto de la nasa.
     * Si es asi actualizamos la fecha en la sesión.
    */

    if(isset($_REQUEST['fechaNasa'])){
        $_SESSION['nasaFechaActual'] = $_REQUEST['fechaNasa'];
    }
    /**
    * Llamamos a la API de la NASA utilizando la fecha en curso almacenada en la sesión.
    * Si la respuesta es correcta se almacena el título y la url de la foto.
    */

    /*
    try{
        

        $oFotoNasaEnCurso = REST::apiNasa($_SESSION['nasaFechaActual']);

        if($oFotoNasaEnCurso && is_object($oFotoNasaEnCurso)){
            // Almacenamis el título obtenido en el array.
            $aVistaRest['nasa']['titulo'] = $oFotoNasaEnCurso->getTitulo();
            // Almacenamos la url obtenida en el array.
            $aVistaRest['nasa']['foto'] = $oFotoNasaEnCurso->getFoto();
        }else{ // Si hay respuesta nula lanza una excepción
            throw new Exception('No se ha podido obtener la información de la API');
        }
    }catch (Exception $ex){
        $error = new AppError(
            $ex-> getCode(),
            $ex -> getMessage(),
            $ex ->getFile(),
            $ex -> getLine(),
            $_SESSION['paginaAnterior']
        );
        // Guardamos el objeto ErrorApp en la sesión
        $_SESSION['error'] = $error;
        $_SESSION['paginaEnCurso'] = 'error';
        header('Location: indexLoginLogoff.php');
        exit();
    }
    */

    

    if (isset($_REQUEST['buscarAemet'])) {
        $provincia = trim($_REQUEST['provincia']);
        $localidad = trim($_REQUEST['localidad']);
        if ($provincia !== '' && $localidad !== '') {
            $datosAemet = REST::apiAemet($provincia, $localidad);
            if ($datosAemet !== null) {
                $aVistaRest['aemet'] = [
                    'estado' => $datosAemet['estado'],
                    'max'    => $datosAemet['max'],
                    'min'    => $datosAemet['min']
                ];
            }
        }
    }

    require_once $view['layout'];
?>