<?php

// Conexión a la base de datos (ajusta los valores según tu configuración)
$servidor = "localhost:3307";
$usuario = "root";
$contrasena = "";
$base_de_datos = "pokedex";

$conexion = new mysqli($servidor, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener el término de búsqueda del formulario
$termino_busqueda = $_POST["search"];

// Escapar el término de búsqueda para evitar inyección de SQL
$termino_busqueda = $conexion->real_escape_string($termino_busqueda);

// Crear y ejecutar la consulta SQL
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
        <th>Tipo</th>
        <th>Número</th>
        <th>Nombre</th>
        <th>Detalle</th>
    </tr>
</thead>
<tbody>
<?php    
if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        // Mostrar los resultados como desees
        echo "<tr>";
        echo "<td><img src='Pokemones/{$fila['imagen']}' alt='{$fila['nombre']}'></td>";
        echo "<td>{$fila['nombre_tipo']}</td>";
        echo "<td>#{$fila['numero_identificador']}</td>";
        echo "<td>{$fila['nombre']}</td>";
        echo "<td class='description'><a href='infopokemon.php'>Ver más</a></td>";
        echo "</tr>";
    }
} else {
    echo "Pokemon no encontrado.";?>
    <tr name="Charizard" id="Charizard">
    <td><img src="Pokemones/Charizard.png" alt="Pokemon 1"></td>
    <td>Fuego</td>
    <td>#2</td>
    <td>Charizard</td>
    <td class="description"><a href="infopokemon.php">Ver más</a></td>
</tr>

<!-- Ejemplo de fila 2 -->
<tr>
    <td><img src="Pokemones/Squirtle.png" alt="Pokemon 2"></td>
    <td>Agua</td>
    <td>#3</td>
    <td>Squirtle</td>
    <td class="description"><a href="infopokemon.php">Ver más</a></td>
</tr>
<?php
}?>

     </tbody>
    </table>
</main>

<?php

// Cerrar la conexión a la base de datos
$conexion->close();

?>