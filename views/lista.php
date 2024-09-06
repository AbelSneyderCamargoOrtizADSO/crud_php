<?php
require_once(__DIR__ . "/../libs/Database.php");
require_once(__DIR__ . "/../libs/Modelo.php");
include_once("../clases/Aprendiz.php");

$database = new Database();
$conection = $database->getConection();

$ob = new Aprendiz($conection);
$usuarios = $ob->getAll();

// var_dump($usuarios);

?>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Genero</th>
            <th>Carrera</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($i=0; $i < count($usuarios); $i++) { 
        ?>
        <tr>
            <td><?=$usuarios[$i]["id"]?></td>
            <td><?=$usuarios[$i]["nombre"]?></td>
            <td><?=$usuarios[$i]["apellido"]?></td>
            <td><?=$usuarios[$i]["edad"]?></td>
            <td><?=$usuarios[$i]["genero"]?></td>
            <td><?=$usuarios[$i]["carrera"]?></td>
            <td>
                <a href="editar.php?id=<?=$usuarios[$i]["id"]?>">Editar</a>
                <form action="../controllers/eliminar.php" method="post">
                    <input type="hidden" name="id" value="<?=$usuarios[$i]["id"]?>">
                    <button>Eliminar</button>
                </form>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>