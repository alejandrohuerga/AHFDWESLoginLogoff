<?php 

require_once 'conf/confDBPDO';
class DBPDO{
    public static function ejecutarConsulta ($entradaSQL, $parametros=null){
        try{
            // Instanciamos un objeto PDO y establecemos la conexión.
            $oPDO=new PDO(DNS,USUARIODB,PSWD);
            // Preparación de la consulta.
            $consulta=$oPDO->prepare($entradaSQL);
            // Ejecutamos la consulta.
            $consulta->execute($parametros);
            // Devolvemos el resultado de la consulta.
            return $consulta;
        }catch (PDOException $exc) {
            $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
            $_SESSION['paginaEnCurso'] = 'error';
            header("Location: indexLoginLogoff.php");
            exit;
        } finally {
            // Cierre de conexión con la base de datos.
            unset($oPDO);
        }
    }
}

?>