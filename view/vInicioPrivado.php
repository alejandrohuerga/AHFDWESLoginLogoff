<header>
    <p>LOGIN LOGOFF</p>
    <h2>INICIAR PRIVADO</h2>
    <form>
        <input type="submit" name="cerrarSesion" value="Cerrar Sesion" />
    </form>
</header>
<main>
    <?php
        if($_COOKIE["idioma"]=="es"){ // Mensaje que se muestra si elegimos el idioma en español
            echo "<h2>Bienvenido " . $aDatosUsuario['descUsuario'] . "</h2>";
            if($aDatosUsuario['numAccesos']){
                echo "<h2> ! Esta es la primera vez que te conectas !</h2>";
            }else{
                echo "<h2>Esta es la " . $aDatosUsuario['numAccesos'] . " vez que te conectas</h2>";
                echo "<h2>Usted se conecto por última vez el   " . $aDatosUsuario['fechaHoraUltimaConexionAnterior'] . "</h2>";
            }
        }

        if($_COOKIE["idioma"]=="en"){ // Mensaje que se muestra si elegimos el idioma en inglés
            echo "<h2>Welcome " . $aDatosUsuario['descUsuario'] . "</h2>";
            if($aDatosUsuario['numAccesos'] == 0){
                echo "<h2> This is your first conection !</h2>";
            }else{
                echo "<h2>This is the " . $aDatosUsuario['numAccesos'] . " time you have conected</h2>";
                echo "<h2>You last concted on " . $aDatosUsuario['fechaHoraUltimaConexionAnterior'] . "</h2>";
            }
        }

        if($_COOKIE["idioma"]=="pt"){ // Mensaje que se muestra si elegimos el idioma en Portugues
            echo "<h2>Bem-vindo " . $aDatosUsuario['descUsuario'] . "</h2>";
            if($aDatosUsuario['numAccesos']){
                echo "<h2> Esta é a sua primeira ligação !</h2>";
            }else{
                echo "<h2>Esta é a " . $aDatosUsuario['numAccesos'] . " que ele se conecta</h2>";
                echo "<h2>Você fez login pela última vez em " . $aDatosUsuario['fechaHoraUltimaConexionAnterior'] . "</h2>";
            }
        }
    ?>
    <form>
        <input type="submit" name="detalle" value="Detalle" />
    </form>
</main>