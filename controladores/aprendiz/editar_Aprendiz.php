<?php


require_once(__DIR__ . "/../../libs/Database.php");
require_once(__DIR__ . "/../../libs/modelo.php");
include_once("../../clases/Aprendiz.php");

$database = new Database();
$conection = $database->getConection();
$aprendiz = new Aprendiz($conection);


$id = $_REQUEST['id'];
$usuario = $aprendiz->getById($id);

echo"<pre>";
print_r($usuario);
echo"<pre>";

?>

<form action="actualizar.php" method="post">
    <input type="hidden" name="id" value="<?=$usuario['id']?>">
    <div>
        <label>Nombre</label>
        <input type="text" name="firts_name" value="<?=$usuario['firts_name']?>">
    </div>
    <div>
    <label>Apellido</label>
        <input type="text" name="last_name" value="<?=$usuario['last_name']?>">
    </div>
    <div>
        <label>Fecha de Nacimiento</label>
        <input type="text" name="birthdate" value="<?=$usuario['birthdate']?>">
    </div>
    <div>
        <label>Correo</label>
        <input type="text" name="email" value="<?=$usuario['email']?>">
    </div>
    <div>
        <label>Telefono</label>
        <input type="text" name="phone" value="<?=$usuario['phone']?>">
    </div>
    <div>
        <label>Telefono</label>
        <input type="text" name="dni" value="<?=$usuario['dni']?>" readonly>
    </div>
    <div>
        <label>Numero de ficha</label>
        <input type="text" name="user_account" value="<?=$usuario['user_account']?>">
    </div>
    <div>
        <label>Promedio</label>
        <input type="text" name="average" value="<?=$usuario['average']?>">
    </div>
    <div>
        <button type="submit"> Actualizar </button>
    </div>
    

</form>