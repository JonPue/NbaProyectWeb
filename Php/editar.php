
<?php

$id = 1;
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT id, abrebacion, nombreEquipo, nombreSimplificado, localizacion FROM mascotas WHERE id = ?;");
$sentencia->execute([$id]);
$equipos = $sentencia->fetchObject();
if (!$equipos) {
    #No existe
    echo "¡No existe ningun equipo con ese ID!";
    exit();
}

$iid = 1;
include_once "base_de_datos.php";
$sentencia2 = $base_de_datos->prepare("SELECT iid, nombre, apellido, nombreEquipoo FROM mascotas WHERE id = ?;");
$sentencia2->execute([$id]);
$jugadores = $sentencia2->fetchObject();
if (!$jugadores) {
    #No existe
    echo "¡No existe ningun equipo con ese ID!";
    exit();
}

#Si el equipo existe, se ejecuta esta parte del código
?>