<?php 

require_once 'conf/confDBPDO';
class DBPDO{
    public static function ejecutarConsulta ($entradaSQL, $parametros=null){
        try{
            $oPDO=new PDO(DNS,USUARIODB,PSWD);
            $consulta=$oPDO->prepare($entradaSQL);
            $consulta->execute($parametros);
            return $consulta;
        }catch (PDOException $exc) {
            header("Location: indexLoginLogoff.php");
        } finally {
            unset($oPDO);
        }
    }
}

?>