<?php

/**
     * Clase que representa la foto del día de la nasa con su título y URL.
     * Permite acceder a los distintos atributos de la foto.
     * 
     * @author Alejandro De la Huerga.
     * @since 18/01/2026
     * @version 1.0.0 Última actualización 18/01/2026
     */
class FotoNasa{
    private $titulo;
    private $foto;

    /**
     * Funcition __construct
     * Función constructor para poder crear un objeto FotoNasa.
     * @param String $título Titulo de la imagen de la nasa.
     * @param String $foto URL con la foto del día de la nasa.
     * 
     * @since 18/01/2026
     * @author Alejandro De la Huerga.
     * @version 1.0.0
     */
    public function __construct($titulo, $foto)
    {
        $this->titulo = $titulo;
        $this->foto = $foto;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
        return $this;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;
        return $this;
    }
}