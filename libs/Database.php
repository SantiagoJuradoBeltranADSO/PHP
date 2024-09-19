<?php

class Database{
    private $conection;
    public function __construct(){
        $option =[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        $this->conection = new PDO("mysql:host=127.0.0.1;dbname=laura_2696521", "santiago_2696521", "2696521", $option);

        $this->conection->exec("SET CHARACTER SET UTF8");
    }

    public function getConection(){
        return $this->conection;
    }

    public function closeConection(){
        $this->conection = null;
    }
}