<?php
require_once ('conexion.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Aagregar Pokémon</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h1 class="title">Agragar  Pokémon</h1>
<div class="container">
    <form action="agregrarPokemon.php" method="post" enctype="multipart/form-data">
        <label for="archivo">Selecciona una imagen:</label>
        <input type="file" name="archivo" id="archivo"><br><br>

        <label for="nombre">Nombre:</label>
        <input class="input" type="text" id="nombre" name="nombre" placeholder=""><br><br>

        <label for="numero_identificador">Número identificador:</label>
        <input class="input" type="text" id="numero_identificador" name="numero_identificador" placeholder=""><br><br>

        <label for="descripcion">Descripción:</label><br>
        <textarea class="input" id="descripcion" name="descripcion" rows="4" cols="50" placeholder=""></textarea><br><br>

        <label for="tipo">Selecciona un tipo:</label>
        <select name="tipo" id="tipo">
        <?php

        $sql = "SELECT nombre FROM tipos";
        $result = $conexion->query($sql);

        while ($row = $result->fetch_assoc()) {
        $nombreTipo = $row['nombre'];
        echo "<option value='$nombreTipo'>$nombreTipo</option>";
        }


        ?>
        </select>

        <label for="tipo">Selecciona un segundo tipo:</label>
        <select name="tipo2" id="tipo2">
            <?php

            $sql = "SELECT nombre FROM tipos";
            $result = $conexion->query($sql);

            while ($row = $result->fetch_assoc()) {
                $nombreTipo2 = $row['nombre'];
                echo "<option value='$nombreTipo2'>$nombreTipo2</option>";
            }

            $conexion->close();
            ?>
        </select>


        <input class="button" type="submit" value="agregar Pokémon" name="enviarPokemon">
    </form>
</div>
<a class="button" href="index.php" >Volver</a>
</body>
</html>

