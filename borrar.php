<!-- Ir a la base de datos y hacer un delete -->
<?php

require_once('conexion.php');

$id_pokemon_a_eliminar = $_GET["id"];

$sql = "DELETE FROM pokemon WHERE id = $id_pokemon_a_eliminar";

if ($conexion->query($sql) === TRUE) {
    echo "Pokemon eliminado con éxito";
    header("Location: index.php");
} else {
    echo "Error al eliminar pokemon: " . $conexion->error;
}

$conexion->close();

?>