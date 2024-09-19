<?php
class Instructor{
    protected $horario;
    protected $sueldo;

    public function getHorario(){
        return $this->horario;
    }

    public function getSueldo(){
        return $this->sueldo;
    }

    public function setHorario($horario){
        $this->horario = $horario;
    }

    public function setSueldo($sueldo){
        $this->sueldo = $sueldo;
    }
}