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
    </header>
    <main>
        <h2>Buscar Pokémon</h2>
        <form id="search-form" actio>
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
                    <th>Acciones</th> <!-- Columna de Acciones -->
                </tr>
            </thead>
            <tbody>
                <!-- Ejemplo de fila 1 -->
                
                <tr>
                    <td><img src="imagen1.png" alt="Pokemon 1"></td>
                    <td>Fuego</td>
                    <td>#001</td>
                    <td>Charizard</td>
                    <td class="actions">
                        <a href="infopokemon.php"><button class="modify">Modificar</button></a>
                        <button class="delete">Bajar</button>
                    </td>
                </tr>
                <!-- Ejemplo de fila 2 -->
                <tr>
                    <td><img src="imagen2.png" alt="Pokemon 2"></td>
                    <td>Agua</td>
                    <td>#007</td>
                    <td>Squirtle</td>
                    <td class="actions">
                        <button class="modify">Modificar</button>
                        <button class="delete">Bajar</button>
                    </td>
                </tr>
                <!-- Puedes agregar más filas aquí -->
            </tbody>
        </table>
</body>
</html>