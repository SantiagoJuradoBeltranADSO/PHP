<?php


require_once(__DIR__ . "/../../libs/Database.php");
require_once(__DIR__ . "/../../libs/modelo.php");
include_once("../../clases/Aprendiz.php");

$database = new Database();
$conection = $database->getConection();
$aprendiz = new Aprendiz($conection);


$id = $_REQUEST['id'];

$aprendiz->delete($id);

header('location: listar.php');