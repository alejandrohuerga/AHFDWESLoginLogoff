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
        try{
            $oUsuario=null;
            $consulta = <<<QUERY
               SELECT * FROM T_01Usuario WHERE T01_CodUsuario="$codUsuario" 
               AND T01_Password=SHA2("{$codUsuario}{$password}",256);
            QUERY;

            $resultado=DBPDO::ejecutarConsulta($consulta);
            
            if( $resultado -> rowcount() >0){
                
            }
            
        }catch (Exception $ex){
            echo $ex -> getMessage();
        }

        
    }
}
?>