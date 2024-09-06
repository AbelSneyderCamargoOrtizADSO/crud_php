<?php


class Persona extends Modelo {
    protected $nombre;
    protected $apellido;
    protected $edad;
    protected $genero;
    protected $carrera;
    
    public function __construct($id, $table, PDO $connection){
        parent::__construct($id, $table, $connection);
        // echo "Soy un constructor";
    }

    public function saludar(){
        return "Hola soy $this->nombre $this->apellido";
    }

    function getNombre(){
        return $this->nombre;
    }

    function getApellido(){
        return $this->apellido;
    }

    function getEdad(){
        return $this->edad;
    }

    function getGenero(){
        return $this->genero;
    }

    function getCarrera(){
        return $this->carrera;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function setApellido($apellido){
        $this->apellido = $apellido;
    }

    function setEdad($edad){
        $this->edad = $edad;
    }

    function setGenero($genero){
        $this->genero = $genero;
    }

    function setCarrera($carrera){
        $this->carrera = $carrera;
    }
}