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
        <form id="search-form">
            <input class="busquedap" type="text" id="search-input" name="search" placeholder="Nombre, Tipo o Número del Pokemon">
            <button type="submit">Buscar al Pokemon</button>
        </form>
       
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
                <!-- Ejemplo de fila 1 -->
               
                    <td><img src="imagen1.png" alt="Pokemon 1"></td>
                    <td>Fuego</td>
                    <td>#001</td>
                    <td>Charizard</td>
                    <td class="description"><a href="infopokemon.php">Ver más</a></td>
                </tr>
                
                <!-- Ejemplo de fila 2 -->
                <tr>
                    <td><img src="imagen2.png" alt="Pokemon 2"></td>
                    <td>Agua</td>
                    <td>#007</td>
                    <td>Squirtle</td>
                    <td class="description"><a href="infopokemon.php">Ver más</a></td>
                </tr>
                <!-- Puedes agregar más filas aquí -->
            </tbody>
        </table>
    </main>

</body>



</html>


