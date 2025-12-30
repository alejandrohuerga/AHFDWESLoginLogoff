<?php
/**
 * Clase UsuarioPDO
 * 
 * Clase para las funciones del usuario.
 * 
 * @author Alejandro De la Huerga Fernández
 * @version 1.0.0 Última modificación: 18/12/2025
 *  
 * */

class UsuarioPDO{
    
    /**
     * Función para validar un usuario.
     * Función que comprueba si existe el usuario en la base de datos.
     * Parámetros: Código y Password.
     * 
     * @param String $codUsuario , código del usuario a validar.
     * @param String $password , password sin codificar y sin unir el código del usuario.
     * @return Objeto usuario|null|PDOException.
     * Devuelve un objeto Usuario si existe.
     * Devuelve null si no ha encontrado al usuario.
     * Devuelve PDOException si ha habido algún error.
     * 
     * @author Alejandro De la Huerga.
     * @version 1.0.0 Fecha Última modificación: 18/12/2025.
     * @since 18/12/2025
     */
    
    public static function validarUsuario($codUsuario,$password){
            $oUsuario=null; // Variable que almacenara el objeto de la clase usuario inicializado a null.
            // Comprobación de que el usuario y el password existen en la base de datos.
            $consulta="SELECT * FROM T_01Usuario WHERE T01_CodUsuario=? AND T01_Password=?";
            $passwordEncriptado=hash("sha256",($codUsuario.$password)); // Encriptamos la password.
            // Variable resultado que devuelve la función ejecutar consulta con los parámetros.
            $resultado=DBPDO::ejecutarConsulta($consulta,[$codUsuario,$passwordEncriptado]); 
            
            if($resultado -> rowCount()>0){ // Si la consulta devuelve algín resultado.
                $oUsuarioConsulta = $resultado -> fetchObject(); // Guardo en la variable en forma de objeto el resultado de la consulta.

                // Actualizamos la fecha de la última conexión.
                $consultaActualizaciónFechaConexion="UPDATE T_01Usuario SET T01_NumConexiones = T01_NumConexiones+1, T01_FechaHoraUltimaConexion=? WHERE T01_CodUsuario=?";
                $resultadoActualizacionFechaConexion=DBPDO::ejecutarConsulta($consultaActualizaciónFechaConexion,[time(),$codUsuario]);

                if($resultadoActualizacionFechaConexion){
                    // Instancia de un objeto usuario con los datos del usuario.
                    $oUsuario=new Usuario($oUsuarioConsulta->T01_CodUsuario,$oUsuarioConsulta->T01_Password,$oUsuarioConsulta->T01_DescUsuario,$oUsuarioConsulta->T01_NumConexiones+1,
                    $oUsuarioConsulta->T01_FechaHoraUltimaConexion, $oUsuarioConsulta->T01_Perfil, $oUsuarioConsulta->T01_ImagenUsuario);
                }
            }
            
            return $oUsuario;
    }
}
?>