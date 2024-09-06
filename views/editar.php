<?php
require_once(__DIR__ . "/../libs/Database.php");
require_once(__DIR__ . "/../libs/Modelo.php");
include_once("../clases/Aprendiz.php");

$database = new Database();
$conection = $database->getConection();
$ob = new Aprendiz($conection);

$id = $_GET["id"];
if (isset($id)) {
    $usuario = $ob->getById($id);
?>
<form action="../controllers/aprendiz.php" method="post" class="form">

    <input type="hidden" name="id" value="<?= $usuario['id']?>" >

    <div class="form__group">
        <label for="">Nombre</label>
        <input type="text" placeholder="Nombre" name="nombre" value="<?= $usuario['nombre'] ?>">
    </div>
    <div class="form__group">
        <label for="">Apellido</label>
        <input type="text" placeholder="Apellido" name="apellido" value="<?= $usuario['apellido'] ?>">
    </div>
    <div class="form__group">
        <label for="">Edad</label>
        <input type="text" placeholder="Edad" name="edad" value="<?= $usuario['edad'] ?>">
    </div>
    <div class="form__group">
        <label for="">Genero</label>
        <input type="text" placeholder="Genero" name="genero" value="<?= $usuario['genero'] ?>">
    </div>
    <div class="form__group">
        <label for="">Carrera</label>
        <input type="text" placeholder="Carrera" name="carrera" value="<?= $usuario['carrera'] ?>">
    </div>
    <div class="form__group">
            <label for="">Cuenta</label>
            <input type="text" placeholder="Cuenta" name="cuenta" value="<?= $usuario['cuenta'] ?>">
        </div>
        <div class="form__group">
            <label for="">Promedio</label>
            <input type="text" placeholder="Promedio" name="promedio" value="<?= $usuario['promedio'] ?>">
        </div>
    <button type="submit">Guardar</button>
</form>
<?php
} else {
    ?>
    <p>
        Falta el id para buscar Usuario
    </p>
    <?php
}
?>

