<?php

$host = "localhost";     
$usuario = "ailu";
$password = "ailu";
$nombre_bd = "pokedex"; 


$conexion = new mysqli($host, $usuario,$password, $nombre_bd);


if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

?>
