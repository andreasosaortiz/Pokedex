<?php
include_once("conexionbasededatos.php");

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
            mysqli_stmt_bind_param($stmtInsertar, "si", $nombreNuevoUsuario, $contrasenaHash);

            if (mysqli_stmt_execute($stmtInsertar)) {
                session_start();
                $_SESSION["usuario"] = $nombreNuevoUsuario;
                $_SESSION["logeado"] = true;

                mysqli_stmt_close($stmtInsertar);
                mysqli_close($conexion);

                //header("Location: ??? ");
                //exit();
            } else {
                echo "Error: " . mysqli_error($conexion);
            }
        }

        mysqli_stmt_close($stmtInsertar);

    }
}
mysqli_close($conexion);

?>
