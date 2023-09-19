<?php
include_once('conexion.php');

$termino_busqueda = $_POST["search"];

$termino_busqueda = $conexion->real_escape_string($termino_busqueda);

$sql = "SELECT p.*, t.nombre AS nombre_tipo
        FROM pokemon AS p
        INNER JOIN tipos AS t ON p.tipo_id = t.id
        WHERE p.nombre LIKE '%$termino_busqueda%'";
        
$resultado = $conexion->query($sql);
include('cabecera.php');
?>
<main>
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
}?>
     </tbody>
    </table>
</main>
<?php

$conexion->close();

?>