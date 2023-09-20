<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $numero_id = $_POST["numero_identificador"];

    if (isset($_GET["id"])) {
        $id_pokemon_a_actualizar = $_GET["id"];

        require_once('conexion.php');

    $id_pokemon_a_eliminar = $_GET["id"];

    $sql = "UPDATE pokemon SET nombre = '$nombre', descripcion = '$descripcion' WHERE id = $id_pokemon_a_actualizar";

        if ($conexion->query($sql) === TRUE) {
        echo "Pokemon actualizado con éxito";
        header("Location: index.php");
        exit;
        } else {
        echo "Error al actualizar pokemon: " . $conexion->error;
        }

    $conexion->close();
}
}
?>
