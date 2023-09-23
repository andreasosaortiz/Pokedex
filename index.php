<?php require_once('conexion.php');?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="icon" href="Pokemones/dex.png" type="image/x-icon">
</head>
<body>
    
    <header>
    <?php
    include_once ("cabecera.php");
    ?>
    </header>
    <main>
        <div class="titulo">
        <h2>Buscar Pokémon</h2>
        <img src="./Pokemones/gifpokemon.gif" alt="Icono">
        </div>
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
                    <?php
                    if(isset($_SESSION["logeado"])){
                        echo "<th>Acciones</th>";
                    };
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once('datos.php');
                ?>
            </tbody>
        </table>
    </main>
    <?php
    if(isset($_SESSION["logeado"])){
        echo '<button ID="agregarPokemon" type="button"> <a href="crearPokemon.php"> Nuevo Pokemon</a> </button>';
    }
    ?>
</body>



</html>


