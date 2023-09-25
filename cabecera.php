

<div class="contenedor-logo">
<img class="logo" src="Pokemones/dex.png" alt="Logo">
<a href="/" class="logo">
				<img src="Pokemones/Pokédex_logo.png" alt="Logo Pokedex" />
			</a>
            </div>
    <?php
    session_start();
    if(isset($_SESSION["logeado"]) && $_SESSION["logeado"]){
            echo '<div class="usuario-ctn"><h4>Bienvenido ' . $_SESSION["usuario"] . '</h4>
            <form action="logout.php">
            <input type="submit" value="Cerrar sesión" id="logout">
        </form>       
    </div>';
    }else{
        echo '<div id="login_form">
        <form action="verificacionlogear.php" method="post">
            <input class="input" type="text" name="username" placeholder="Usuario" required>
            <input class="input" type="password" name="password" placeholder="Contraseña" required>
            <input type="submit" value="Login" id="boton_login">
        </form>
    </div>';
    }
    ?>

