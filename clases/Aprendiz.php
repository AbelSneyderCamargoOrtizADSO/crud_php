<?php
include_once("../clases/Persona.php");

class Aprendiz extends Persona{
    private $cuenta;
    private $promedio;

    function __construct(PDO $connection)
    {
        parent::__construct('id', 'usuarios', $connection);
    }

    function getCuenta(){
        return $this->cuenta;
    }

    function getPromedio(){
        return $this->promedio;
    }

    function setCuenta($cuenta){
        $this->cuenta = $cuenta;
    }

    function setPromedio($promedio){
        $this->promedio = $promedio;
    }

    public function cancelarMatricula(){
        echo "<p>Cancelar matricula del aprendiz " . $this->nombre . "</p>";
    }
}