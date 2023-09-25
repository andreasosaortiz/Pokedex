<?php
require_once('conexion.php');
include 'tipoPokemon.php';

$sql = "SELECT id, imagen, tipo_id, tipo_id_2, numero_identificador, nombre FROM pokemon";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td><img class='pokemones' src='Pokemones/" . $row["imagen"] . "' alt='" . $row["nombre"] . "'></td>";
        $tipo_id_img = obtenerImagenTipoPokemon($row["tipo_id"]);
        $tipo_id_2_img = obtenerImagenTipoPokemon($row["tipo_id_2"]);
        $nombreTipo = obtenerNombreTipoPokemon($row["tipo_id"]);
        $nombreTipo2 = obtenerNombreTipoPokemon($row["tipo_id_2"]);
        echo "<td><img class='tipo' src='" . $tipo_id_img . "' alt='" . $row["tipo_id"] . "' title='" . $nombreTipo . "'><img class='tipo' src='" . $tipo_id_2_img . "' alt='" . $row["tipo_id_2"] . "' title='" . $nombreTipo2 . "'></td>";
        echo "<td class='id'>" . $row["numero_identificador"] . "</td>";
        echo "<td class='nombre'>" . $row["nombre"] . "</td>";

       // echo "<td class='detalle'><a  class='description' href='infopokemon.php?id=" . $row["id"] . "'>Ver más</a></td>";

       echo "<td class='detalle'><button  class='description' ><a   href='infopokemon.php?id=" . $row["id"] . "'>Ver más</a></button> </td>";
        if (isset($_SESSION["logeado"])){
            echo "<td class='actions'>
            <button class='modify'><a href='modificar.php?id=" . $row["id"] . "'>Modificar</a></button>
            <button class='delete'><a href='borrar.php?id=" . $row["id"] . "'>Borrar</a></button>
            </td>";
        };
        echo "</tr>";
    }
} else {
    echo "No se encontraron resultados.";
}
?>
