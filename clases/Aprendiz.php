<?php
include_once("Persona.php");
class Aprendiz extends Persona{
    protected $cuenta;
    protected $promedio;
    
    public function __construct(
        PDO $conection
    ){
        parent::__construct("id", "users", $conection);
    }

    public function getcuenta(){
        return $this->cuenta;
    }

    public function getProemdio(){
        return $this->promedio;
    }

    public function setcuenta($cuenta){
        $this->cuenta = $cuenta;
    }

    public function setPromedio($promedio){
        $this->promedio = $promedio;
    }
}