<?php
require_once("conexion.php");
session_start();

if (isset($_POST["username"]) and isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT nombre, contraseña FROM usuarios WHERE nombre = ?";

    $queryPreparada = mysqli_prepare($conexion, $query);

    if ($queryPreparada) {
        mysqli_stmt_bind_param($queryPreparada, "s", $username);

        mysqli_stmt_execute($queryPreparada);

        $resultado = mysqli_stmt_get_result($queryPreparada);
        if (mysqli_num_rows($resultado) === 1) {
            $row = mysqli_fetch_assoc($resultado);
            $hashContrasenaAlmacenada = $row["contraseña"];
            if (password_verify($password, $hashContrasenaAlmacenada)){
                $_SESSION['usuario'] = $username;
                $_SESSION['logeado'] = true;

                mysqli_stmt_close($queryPreparada);
                mysqli_close($conexion);

                header("Location: index.php");
                exit();
            }else{
                echo "contraseña incorrecta";
                session_destroy();
            }
        } else {
            session_destroy();
            header("Location: registrar.php");
            exit();
        }
        mysqli_stmt_close($queryPreparada);
    }
}

mysqli_close($conexion);

?>