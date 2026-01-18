<?php

/**
     * Clase que representa un Pokemon.
     * Permite acceder a los distintos atributos del Pokemon.
     * 
     * @author Alejandro De la Huerga.
     * @since 18/01/2026
     * @version 1.0.0 Última actualización 18/01/2026
     */
class Pokemon
{
    private $nombre;
    private $modelo;

    /**
    * Funcition __construct
    * Función constructor para poder crear un objeto FotoNasa.
    * @param String $nombre nombre del Pokemon.
    * @param String $modelo URL del modelo 3d del Pokemon.
    * 
    * @since 18/01/2026
    * @author Alejandro De la Huerga.
    * @version 1.0.0
    */
    public function __construct($nombre, $modelo)
    {
        $this->nombre = $nombre;
        $this->modelo = $modelo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
        return $this;
    }
}