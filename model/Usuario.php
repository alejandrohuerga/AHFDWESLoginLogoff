<?php 
/**
 * Clase que representa un Usuario.
*/

class Usuario{
    private $codUsuario;
    private $password;
    private $descUsuario;
    private $numAccesos;
    private $fechaHoraUltimaConexion;
    private $fechaHoraUltimaConexionAnterior;
    private $perfil;
    
    

    public function __construct($codUsuario,$password,$descUsuario,$numAccesos,$fechaHoraUltimaConexionAnterior) {
        $this->codUsuario= $codUsuario;
        $this->password=$password;
        $this->descUsuario=$descUsuario;
        $this->numAccesos=$numAccesos;
        $this->fechaHoraUltimaConexion= new DateTime("now");
        $this->fechaHoraUltimaConexionAnterior=$fechaHoraUltimaConexionAnterior;
    }


    /**
     * Get the value of codUsuario
     */
    public function getCodUsuario()
    {
        return $this->codUsuario;
    }

    /**
     * Set the value of codUsuario
     */
    public function setCodUsuario($codUsuario): self
    {
        $this->codUsuario = $codUsuario;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword($password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of descUsuario
     */
    public function getDescUsuario()
    {
        return $this->descUsuario;
    }

    /**
     * Set the value of descUsuario
     */
    public function setDescUsuario($descUsuario): self
    {
        $this->descUsuario = $descUsuario;

        return $this;
    }

    /**
     * Get the value of numAccesos
     */
    public function getNumAccesos()
    {
        return $this->numAccesos;
    }

    /**
     * Set the value of numAccesos
     */
    public function setNumAccesos($numAccesos): self
    {
        $this->numAccesos = $numAccesos;

        return $this;
    }

    /**
     * Get the value of fechaHoraUltimaConexion
     */
    public function getFechaHoraUltimaConexion()
    {
        return $this->fechaHoraUltimaConexion;
    }

    /**
     * Set the value of fechaHoraUltimaConexion
     */
    public function setFechaHoraUltimaConexion($fechaHoraUltimaConexion): self
    {
        $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;

        return $this;
    }

    /**
     * Get the value of fechaHoraUltimaConexionAnterior
     */
    public function getFechaHoraUltimaConexionAnterior()
    {
        return $this->fechaHoraUltimaConexionAnterior;
    }

    /**
     * Set the value of fechaHoraUltimaConexionAnterior
     */
    public function setFechaHoraUltimaConexionAnterior($fechaHoraUltimaConexionAnterior): self
    {
        $this->fechaHoraUltimaConexionAnterior = $fechaHoraUltimaConexionAnterior;

        return $this;
    }

    /**
     * Get the value of perfil
     */
    public function getPerfil()
    {
        return $this->perfil;
    }

    /**
     * Set the value of perfil
     */
    public function setPerfil($perfil): self
    {
        $this->perfil = $perfil;

        return $this;
    }
}
?>