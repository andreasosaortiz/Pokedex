<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
<header>
        <img class="logo" src="tu_logo.png" alt="Logo">
        <h1>Pokédex</h1>
    
    
    <div id="login-form">
        <form>
            <input type="text" id="username" name="username" placeholder="Usuario" required>
            <input type="password" id="password" name="password" placeholder="Contraseña" required>
            <a href="login.php" class="log">Loguearse></a>
           
        </form>
    </div>
    </header>
    <main>
        <h2>Buscar Pokémon</h2>
        <form id="search-form" method="POST" action="buscar.php">
            <input class="busquedap" type="text" id="search" name="search" placeholder="Nombre, Tipo o Número del Pokemon">
            <button type="submit">Buscar al Pokemon</button>
        </form>