<?php 
/**
 * Clase que proporciona métodos estáticos para interactuar con Web services externos.
 * En este caso se van a utilizar los Web Services de la NASA y la AEMET.
 * 
 * @author Alejandro De la Huerga Fernández.
 * @since 18/01/2026
 * @version 1.0.0
 * 
 * Fecha última modificación: 18/01/2026
 */

class REST{
    /**
     * Clave API para acceder al Web Service de la NASA de foto del día. 
     * La clave la podemos solicitar aquí: https://api.nasa.gov/
     */
    const apikeyNASA = '6qXdzrHPJ6rIaOMcGJDAePcNlUMFoAtOdcjy8yZg';
    const apiKeyAemet = 'eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJhbGVqYW5kcm9odWVyZ2EuZGV2QGdtYWlsLmNvbSIsImp0aSI6ImIwOGQzODIxLTVmMGMtNDE2OC1iODJiLTBlYTlhMDQxZDI5YiIsImlzcyI6IkFFTUVUIiwiaWF0IjoxNzY4NzM3NzczLCJ1c2VySWQiOiJiMDhkMzgyMS01ZjBjLTQxNjgtYjgyYi0wZWE5YTA0MWQyOWIiLCJyb2xlIjoiIn0.nBwPQmylZ4-7iT8PhZUvfFEG8KCOzwzJ7W_wVutymo0';

    /**
     * Función la cual obtiene la foto del dia del Web Service de la NASA.
     * Llama al Web Service de la NASA , solicitando la foto del día. 
     * Nos enviara la foto correspondiente a la fecha dada. 
     * 
     * Si la llamada a la Api contiene los datos requeridos nos devuelve una instancia de la clase 'Foto Nasa'. 
     * En caso de error o de una llamada incorrecta devuelve null.
     * 
     * @param String $fecha Fecha en formato: 'YYYY-MM-DD' para obtener la foto.
     * @return null|FotoNasa Una instancia de la clase FotoNasa o null.
     * 
     * @author Alejandro De la Huerga.
     * @since 18/01/2026
     * @version 1.0.0
     */

    public static function apiNasa($fecha){
        /*
        try{

            // Llamada a la Api de la Nasa con la fecha proporcionada como parámetro.
            $resultadoApi=file_get_contents("https://api.nasa.gov/planetary/apod?api_key=" . self::apikeyNASA . "&date=$fecha");

            if($resultadoApi === false){
                throw new Exception ('No se pudo conectar con la APi');
            }
            // Decodificamos el archivo enviado por la API con formao JSON a un array.
            $archivoAPI=json_decode($resultadoApi,true);

            // Verificamos si la respuesta es correcta , si el archivo contiene los campos title y url.
            if (
                isset($archivoAPI['title']) &&
                isset($archivoAPI['url']) &&
                isset($archivoAPI['media_type']) &&
                $archivoAPI['media_type'] === 'image'
            ) {
                return new FotoNasa(
                    $archivoAPI['title'],
                    $archivoAPI['url']
                );
            }
            return null;
        }catch(Exception $ex){
            // Manejo del error
            $error = new AppError(
                $ex ->getCode(),
                $ex -> getMessage(),
                $ex -> getFile(),
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
    }

    /**
     * Función la cual obtiene lel tiempo de la AEMET.
     * Llama al Web Service de la NASA , solicitando la foto del día. 
     * Nos enviara la foto correspondiente a la fecha dada. 
     * 
     * Si la llamada a la Api contiene los datos requeridos nos devuelve una instancia de la clase 'Foto Nasa'. 
     * En caso de error o de una llamada incorrecta devuelve null.
     * 
     * @param String $Provincia provincia ingresada por el usuario.
     * @param String $localidad provincia ingresada por el usuario.
     * 
     * @author Alejandro De la Huerga.
     * @since 18/01/2026
     * @version 1.0.0
     */

    public static function ApiAemet{
        try{
            
        }catch(Exception $ex){
            // Manejo del error
            $error = new AppError(
                $ex ->getCode(),
                $ex -> getMessage(),
                $ex -> getFile(),
                $ex -> getLine(),
                $_SESSION['paginaAnterior']
            );
            // Guardamos el objeto ErrorApp en la sesión
            $_SESSION['error'] = $error;
            $_SESSION['paginaEnCurso'] = 'error';
            header('Location: indexLoginLogoff.php');
            exit();
        }
    }
?>