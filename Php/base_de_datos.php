<?php
/*
================================
Este archivo se encarga de conectar a la base de datos
y traer un objeto PDO
================================
 */
//Cuando cree la base de datos en clase mirar aer si necesito
//crear el usuario y la contraseña, sino hace falta quitarlos
//$contraseña = "hunter2";
//$usuario = "usuario";
$nombreBaseDeDatos = "bd_NBA";
# Puede ser 127.0.0.1 o el nombre de tu equipo; o la IP de un servidor remoto
$rutaServidor = "127.0.0.1";
try {
    $base_de_datos = new PDO("sqlsrv:server=$rutaServidor;database=$nombreBaseDeDatos");
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}
//La línea de setAttribute es para indicar
//que si hay un error en la base de datos el mismo se refleje y lance como excepción en PHP.