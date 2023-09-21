<?php

$host = "localhost:3306";
$usuario = "root";
$password = "505";
$nombre_bd = "pokedex"; 

$conexion = new mysqli($host, $usuario,$password, $nombre_bd);


if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

?>
