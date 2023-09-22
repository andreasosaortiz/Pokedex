

<?php
require_once('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $archivo= $_FILES["archivo"];
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $numero_id = $_POST["numero_identificador"];
    $tipo = $_POST["tipo"];
    $tipo2 = $_POST["tipo2"];


    //$name= $nombre.".png";

    if (isset($_POST["enviarPokemon"])) {
        $nombre_archivo = $_FILES['archivo']['name'];
        $ruta_temporal = $_FILES['archivo']['tmp_name'];
        $ruta_destino = 'Pokemones/' . $nombre_archivo;

        if (move_uploaded_file($ruta_temporal, $ruta_destino))  {
            $sql = "SELECT id FROM tipos WHERE nombre = '$tipo'";
            $result = $conexion->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $idTipo = $row["id"];
            } else {

                $idTipo = null;
            }
            $sql = "SELECT id FROM tipos WHERE nombre = '$tipo2'";
            $resultTipo2 = $conexion->query($sql);
            if ($resultTipo2->num_rows > 0) {
                $row2 = $resultTipo2->fetch_assoc();
                $idTipo2 = $row2["id"];
            } else {
                $idTipo2 = null;
            }

            $sql = "INSERT INTO pokemon (nombre, imagen, numero_identificador, descripcion, tipo_id, tipo_id_2) 
                    VALUES ('$nombre', '$nombre_archivo', $numero_id, '$descripcion', $idTipo, $idTipo2)";



            if ($conexion->query($sql) === TRUE) {
                echo "Nuevo Pokémon agregado correctamente.";
                header('Location: index.php');
            } else {
                echo "Error al agregar el Pokémon: " . $conexion->error;
            }
        }
    }

    // Cerrar la conexión
    $conexion->close();
}else{
        echo "<br> <br>Error al subir el archivo";
    }


?>
