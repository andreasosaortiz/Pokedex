<?php
include_once("conexion.php");

if (isset($_POST["nombre"]) and isset($_POST["contraseña"])) {
    $nombreNuevoUsuario = $_POST["nombre"];
    $contrasenaNuevoUsuario = $_POST["contraseña"];

    $query = "SELECT nombre FROM usuarios WHERE nombre = ?";
    $stmt = mysqli_prepare($conexion, $query);
    mysqli_stmt_bind_param($stmt, "s", $nombreNuevoUsuario);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($resultado) > 0) {
        echo '<div>El nombre de usuario no esta disponible</div>';
    } else {
        $contrasenaHash = password_hash($contrasenaNuevoUsuario, PASSWORD_DEFAULT);

        $queryInsertarUsuario = "INSERT INTO usuarios(nombre, contraseña) VALUES (?,?)";
        $stmtInsertar = mysqli_prepare($conexion, $queryInsertarUsuario);

        if ($stmtInsertar) {
            mysqli_stmt_bind_param($stmtInsertar, "ss", $nombreNuevoUsuario, $contrasenaHash);

            if (mysqli_stmt_execute($stmtInsertar)) {

                mysqli_stmt_close($stmtInsertar);
                mysqli_close($conexion);

                header("Location: index.php");

            } else {
                echo "Error: " . mysqli_error($conexion);
            }
        }
        mysqli_stmt_close($stmtInsertar);

    }
}
mysqli_close($conexion);
?>

<?php require_once('conexion.php'); ?>

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
    <form method="post" action="registrar.php" id="formulario-registro">
        <div class="label-input">
        <label>Nombre de usuario: </label>
        <input type="text" name="nombre" placeholder="Nombre..." class="input-form">
        </div>
        <div class="label-input">
        <label>Contraseña:</label>
        <input  type="password" name="contraseña" placeholder="Contraseña..." class="input-form">
        </div>
        <input type="submit" value="Enviar" class="btn-enviar">
    </form>
</main>

</body>



</html>

