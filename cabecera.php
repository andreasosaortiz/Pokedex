<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
</head>
<body>
    
<header>
    <img class="logo" src="Pokemones/dex.png" alt="Logo">
    <h1>Pokédex</h1>
    <?php
    session_start();
    if(isset($_SESSION["logeado"]) && $_SESSION["logeado"]){
            echo '<div class="usuario-ctn"><h4>Bienvenido ' . $_SESSION["usuario"] . '</h4>
            <form action="logout.php">
            <input type="submit" value="Cerrar sesión" id="logout">
        </form>       
    </div>';
    }else{
        echo '<div id="login-form">
        <form>
            <input type="text" id="username" name="username" placeholder="Usuario" required>
            <input type="password" id="password" name="password" placeholder="Contraseña" required>
            <a href="login.php" class="">Loguearse></a>
        </form>
    </div>';
    }
    ?>

    </header>
    <main>
        <h2>Buscar Pokémon</h2>
        <form id="search-form" method="POST" action="buscar.php">
            <input class="busquedap" type="text" id="search" name="search" placeholder="Nombre, Tipo o Número del Pokemon">
            <button type="submit">Buscar al Pokemon</button>
        </form>