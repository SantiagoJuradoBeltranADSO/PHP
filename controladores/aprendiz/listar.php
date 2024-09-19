<?php 
require_once(__DIR__ . "/../../libs/Database.php");
require_once(__DIR__ . "/../../libs/modelo.php");
include_once(__DIR__ . "/../../clases/Aprendiz.php");

$database = new Database();
$conection = $database->getConection();
$aprendiz = new Aprendiz($conection);
$lista = $aprendiz->getAll();
?>

<table border="1">
    <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Fecha de Nacimiento</th>
        <th>Correo</th>
        <th>Teléfono</th>
        <th>DNI</th>
        <th>Cuenta</th>
        <th>Promedio</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        <?php
        for ($i = 0; $i < count($lista); $i++) {
        ?>
        <tr>
            <td><?= $lista[$i]['id'] ?></td>
            <td><?= $lista[$i]['firts_name'] ?></td>
            <td><?= $lista[$i]['last_name'] ?></td>
            <td><?= $lista[$i]['birthdate'] ?></td>
            <td><?= $lista[$i]['email'] ?></td>
            <td><?= $lista[$i]['phone'] ?></td>
            <td><?= $lista[$i]['dni'] ?></td>
            <td><?= $lista[$i]['user_account'] ?></td>
            <td><?= $lista[$i]['average'] ?></td>
            <td>
                <div>
                    <a href="editar_Aprendiz.php?id=<?= $lista[$i]['id'] ?>">Editar</a>
                    <form action="eliminar_Aprendiz.php" method="post">
                        <input type="hidden" name="id" value="<?= $lista[$i]['id'] ?>">
                        <button type="submit">Eliminar</button>
                    </form>
                </div>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
