<?php

require_once('conexion.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT nombre, imagen, numero_identificador, descripcion FROM pokemon WHERE id = $id";

    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nombre = $row["nombre"];
        $numero_id = $row["numero_identificador"];
        $descripcion = $row["descripcion"];
        $imagen = $row["imagen"];
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Modificar Pokémon</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h1 class="title">Modificar Pokémon</h1>
    <div class="container">
    <img class="imagen" src="Pokemones/<?php echo "$imagen" ?>" alt="">
    <form method="post" action=<?php echo "actualizar.php?id=$id" ?>>
        <label for="nombre">Nombre:</label>
        <input class="input" type="text" id="nombre" name="nombre" placeholder="<?php
        echo "$nombre"
        ?>"><br><br>

        <label for="numero_identificador">Número identificador:</label>
        <input class="input" type="text" id="numero_identificador" name="numero_identificador" placeholder="<?php
        echo "$numero_id"
        ?>"><br><br>

        <label for="descripcion">Descripción:</label><br>
        <textarea class="input" id="descripcion" name="descripcion" rows="4" cols="50" placeholder="<?php
        echo "$descripcion"
        ?>"></textarea><br><br>

        <input class="button" type="submit" value="Modificar Pokémon">
    </form>
    </div>
    <a class="button" href="index.php">Volver</a>
</body>
</html>
