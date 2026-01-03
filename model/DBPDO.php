<?php 

require_once 'config/confDBPDO.php'; // Importamos el archivo de configuración de la base de datos.
class DBPDO{  // Clase para la conexión con la base de datos y poder ejecutar consultas.
    public static function ejecutarConsulta ($entradaSQL, $parametros){  //MÉtodo que se llama ejecutar consulta y le pueda pasar una cosnulta y unos parametros.
        try{
            $miDB=new PDO(DNS,USUARIODB,PSWD); // Instanciamos un objeto PDO y establecemos la conexión.
            $miDB -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Fórmula que utilizara cuando se porduzca un error en la consulta.
            $consulta =$miDB->prepare($entradaSQL); // Preparación de la consulta que se le ha pasado como parámetro.
            $consulta->execute($parametros); // Ejecución de la consulta con los parámetros pasados.

        }catch (PDOException $exc) {
            $consulta=null; // Destruimos la consulta.
            $error = $exc->getCode(); // Guardamos en la variable error el error producido.
            $mensaje = $exc->getMessage(); // Guardamos en la variable mensaje el mensaje del error producido.

            echo "ERROR $error"; // Mostramos el error producido.
            echo "<p style='background: red'> SE HA PRODUCIDO UN ERROR .$mensaje</p>"; // Mostramos el mensaje de error.
        } finally {
            unset($oPDO); // Cierre de conexión con la base de datos.
        }

        return $consulta; // Devolvemos la consulta.
    }
}

?>