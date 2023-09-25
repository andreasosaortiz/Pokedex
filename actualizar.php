<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $numero_id = $_POST["numero_identificador"];

    if (!empty($nombre) || !empty($descripcion) || !empty($numero_id)) {

        if (isset($_GET["id"])) {
            $id_pokemon_a_actualizar = $_GET["id"];

            require_once('conexion.php');

            $actualizar_campos = [];
            if (!empty($nombre)) {
                $actualizar_campos[] = "nombre = '$nombre'";
            }
            if (!empty($descripcion)) {
                $actualizar_campos[] = "descripcion = '$descripcion'";
            }
            if (!empty($numero_id)) {
                $actualizar_campos[] = "numero_identificador = '$numero_id'";
            }

            $update_sql = "UPDATE pokemon SET " . implode(', ', $actualizar_campos) . " WHERE id = $id_pokemon_a_actualizar";

            if ($conexion->query($update_sql) === TRUE) {
                echo "Pokemon actualizado con éxito";
                header("Location: index.php");
                exit;
            } else {
                echo "Error al actualizar pokemon: " . $conexion->error;
            }

            $conexion->close();
        }
    } else {
        echo "No se pudo actualizar.";
    }
}
?>

