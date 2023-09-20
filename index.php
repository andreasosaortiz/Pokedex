<?php require_once('conexion.php');?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="Pokemones/dex.png" type="image/x-icon">
</head>
<body>
    
<header>
        <img class="logo" src="Pokemones/dex.png" alt="Logo">
        <h1>Pokédex</h1>
    <div id="login-form">
        <form action="verificacionlogear.php" method="post">
            <input class="input" type="text" id="username" name="username" placeholder="Usuario" required>
            <input class="input" type="password" id="password" name="password" placeholder="Contraseña" required>
            <input class="log" type="submit" id="submit" value="Logearse">
        </form>
    </div>
    </header>
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
                    <?php
                    if (isset($_SESSION)){
                        echo "<th>Acciones</th>";
                    };
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php include_once('datos.php'); ?>
            </tbody>
        </table>
    </main>

</body>



</html>


