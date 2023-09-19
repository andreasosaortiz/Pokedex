<?php
require_once("conexionbasededatos.php");
session_start();

if (isset($_POST["username"]) and isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT nombre, contraseña FROM usuarios WHERE nombre = ? AND contraseña = ?";

    $queryPreparada = mysqli_prepare($conexion, $query);

}
if ($consultaPreparada) {
    mysqli_stmt_bind_param($consultaPreparada, "ss", $username, $password);

    mysqli_stmt_execute($consultaPreparada);

    $resultado = mysqli_stmt_get_result($consultaPreparada);
}
// verificar al usuario de la manera mas segura
// al momento de verificar al usuario se tiene que guardar la contraseña con un metodo hash.
if ($consultaPreparada) {
    mysqli_stmt_bind_param($consultaPreparada, "ss", $username, $password);

    mysqli_stmt_execute($consultaPreparada);

    $resultado = mysqli_stmt_get_result($consultaPreparada);

    if ($row = mysqli_fetch_assoc($resultado)) {

        $hashContrasenaAlmacenada = $row["contraseña"];
        if (password_verify($pass, $hashContrasenaAlmacenada)){
            $_SESSION['usuario'] = $username;
            $_SESSION['logeado'] = true;

            mysqli_stmt_close($consultaPreparada);
            mysqli_close($conexion);
            //Crear redireccionamiento
            //header("Location: ");
            //exit();

        }else{
            echo "contraseña incorrecta";
            session_destroy();
        }
    } else {
        echo "Usuario no encontrado";
        session_destroy();
    }

    mysqli_stmt_close($consultaPreparada);
}
mysqli_close($conexion);

?>