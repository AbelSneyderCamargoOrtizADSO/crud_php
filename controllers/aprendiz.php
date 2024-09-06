<?php
require_once(__DIR__ . "/../libs/Database.php");
require_once(__DIR__ . "/../libs/Modelo.php");
include_once("../clases/Aprendiz.php");

$database = new Database();
$conection = $database->getConection();
$aprendiz = new Aprendiz($conection);

// $usus = $aprendiz->getAll();

// foreach ($usus as $usu) {
//     echo $usu['nombre'] . " " . $usu['apellido'];
//     echo "<br>";
// }

// var_dump($_REQUEST);

if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $genero = $_POST['genero'];
    $carrera = $_POST['carrera'];
    $cuenta = $_POST['cuenta'];
    $promedio = $_POST['promedio'];

    $id = isset($_POST['id']) ? $_POST['id'] : false ;
    
    if (!$id) {
        $aprendiz->store([
            'nombre' => $nombre,
            'apellido' => $apellido,
            'edad' => $edad,
            'genero' => $genero,
            'carrera' => $carrera,
            'cuenta' => $cuenta,
            'promedio' => $promedio,
        ]);
    }

    if ($id) {
        $aprendiz->update($id, [
            'nombre' => $nombre,
            'apellido' => $apellido,
            'edad' => $edad,
            'genero' => $genero,
            'carrera' => $carrera,
            'cuenta' => $cuenta,
            'promedio' => $promedio,
        ]);
    }
}
?>
