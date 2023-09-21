<?php
include_once('conexion.php');

if($_SERVER["REQUEST_METHOD"] = "POST"){

$termino_busqueda = $_POST["search"];
$termino_busqueda = $conexion->real_escape_string($termino_busqueda);

$sql = "SELECT p.*, t.nombre AS nombre_tipo
        FROM pokemon AS p
        INNER JOIN tipos AS t ON p.tipo_id = t.id
        WHERE p.nombre LIKE '%$termino_busqueda%'";

$resultado = $conexion->query($sql);
}

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pokédex</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/header.css">
    </head>
<header>
    <?php
    include_once ("cabecera.php");
    ?>
</header>
    <body>

<main>
        <h2>Buscar Pokémon</h2>
        <form id="search-form" method="POST" action="buscar.php">
            <input class="busquedap" type="text" id="search" name="search" placeholder="Nombre, Tipo o Número del Pokemon">
            <button type="submit">Buscar al Pokemon</button>
        </form>
<table>
<thead>
    <tr>
    <th>Imagen</th>
    <th style="width: 150px">Tipo</th>
    <th>Número</th>
    <th>Nombre</th>
     <th>Detalle</th>
    </tr>
</thead>
<tbody>
<?php
if($_SERVER["REQUEST_METHOD"] = "POST"){

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        include 'tipoPokemon.php';
        echo "<tr>";
        echo "<td><img class='pokemones' src='Pokemones/" . $row["imagen"] . "' alt='" . $row["nombre"] . "'></td>";
        $tipo_id_img = obtenerImagenTipoPokemon($row["tipo_id"]);
        $tipo_id_2_img = obtenerImagenTipoPokemon($row["tipo_id_2"]);
        echo "<td><img class='tipo' src='" . $tipo_id_img . "' alt='" . $row["tipo_id"] . "'><img class='tipo' src='" . $tipo_id_2_img . "' alt='" . $row["tipo_id_2"] . "'></td>";
        echo "<td>" . $row["numero_identificador"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td><a class='description' href='infopokemon.php?id=" . $row["id"] . "'>Ver más</a></td>";
        echo "</tr>";
    }
} else {
    echo "Pokemon no encontrado.";
    include_once('datos.php');
}
}?>
     </tbody>
    </table>
</main>
<?php

$conexion->close();
?>
    </body>
</html>
