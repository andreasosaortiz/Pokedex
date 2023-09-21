<?php
require_once('conexion.php');

$pokemon_id = $_GET['id'];

$sql = "SELECT nombre, tipo_id, tipo_id_2, descripcion, imagen FROM pokemon WHERE id = $pokemon_id";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nombre = $row['nombre'];
    $tipo = $row['tipo_id'];
    $tipo_2 = $row['tipo_id_2'];
    $descripcion = $row['descripcion'];
    $imagen = $row['imagen'];
} else {
    echo "No se encontró el Pokémon.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon</title>
    <link rel="stylesheet" href="./css/infoPokemon.css">
    <link rel="icon" href="Pokemones/dex.png" type="image/x-icon">
</head>
<body>
    <header>
    <img class="logo" src="Pokemones/dex.png" alt="Logo">
        <h1>Pokédex</h1>
    </header>
    <main>
        <div class="pokemon-card">
            <div class="pokemon-image">
                <img src="<?php echo 'Pokemones/'.$imagen; ?>" alt="<?php echo $nombre; ?>">
            </div>
            <div class="pokemon-details">
                <h2><?php echo $nombre; ?></h2>
                <p>
                    <?php
                    include 'tipoPokemon.php';
                    $tipo_img = obtenerImagenTipoPokemon($tipo);
                    $tipo_id_2_img = obtenerImagenTipoPokemon($tipo_2);
                    $nombreTipo = obtenerNombreTipoPokemon($tipo);
                    $nombreTipo2 = obtenerNombreTipoPokemon($tipo_2);
                    echo "<img class='tipo' src='" . $tipo_img . "' alt='" . $tipo. "' title='" . $nombreTipo . "'>";
                    echo "<img class='tipo' src='" . $tipo_id_2_img . "' alt='" . $tipo_2. "' title='" . $nombreTipo2 . "'>";

                    ?>
                </p>
                <p class="pokemon-description"><?php echo $descripcion; ?></p>
                <a class="button" href="index.php">Volver</a>
            </div>
        </div>
    </main>
    </main>
</body>
</html>
