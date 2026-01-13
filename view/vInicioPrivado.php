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
            echo "<h2>Bienvenido " . $avInicioPrivado['descUsuario'] . "</h2>";
            if($avInicioPrivado['numAccesos']==0){
                echo "<h2> ! Esta es la primera vez que te conectas !</h2>";
            }else{
                echo "<h2>Esta es la " . $avInicioPrivado['numAccesos'] . " vez que te conectas</h2>";
                echo "<h2>Usted se conecto por última vez el   " . $avInicioPrivado['fechaHoraUltimaConexionAnterior'] . "</h2>";
            }
        }

        if($_COOKIE["idioma"]=="en"){ // Mensaje que se muestra si elegimos el idioma en inglés
            echo "<h2>Welcome " . $avInicioPrivado['descUsuario'] . "</h2>";
            if($avInicioPrivado['numAccesos'] == 0){
                echo "<h2> This is your first conection !</h2>";
            }else{
                // Si fechaAnterior ya es un objeto DateTime no hace falta hacer el "new DateTime", se puede usar:
                if($avInicioPrivado['fechaHoraUltimaConexionAnterior'] instanceof DateTime){
                    // Formatear la fecha y hora según la configuración regional española
                    //IntlDateFormatter::FULL - muestra la fecha completa (día de la semana, día, mes y año)
                    //IntlDateFormatter::LONG - mostraría la fecha (día, mes y año)
                    //IntlDateFormatter::MEDIUM - mostraría la fecha abreviada (ejemplo:12 ene 2025)
                    //IntlDateFormatter::NONE - no muestra la hora
                    $oFormatoFecha=new IntlDateFormatter('es_ES', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
                    $fecha=$oFormatoFecha->format($avInicioPrivado['fechaHoraUltimaConexionAnterior']);
                    $hora = $avInicioPrivado['fechaHoraUltimaConexionAnterior']->format('H:i');
                }
                echo "<h2>This is the " . $avInicioPrivado['numAccesos'] . " time you have conected</h2>";
                echo "<h2>You last concted on " . $fecha . " a las " .$hora. "</h2>";
            }
        }

        if($_COOKIE["idioma"]=="pt"){ // Mensaje que se muestra si elegimos el idioma en Portugues
            echo "<h2>Bem-vindo " . $avInicioPrivado['descUsuario'] . "</h2>";
            if($avInicioPrivado['numAccesos']==0){
                echo "<h2> Esta é a sua primeira ligação !</h2>";
            }else{
                echo "<h2>Esta é a " . $avInicioPrivado['numAccesos'] . " que ele se conecta</h2>";
                echo "<h2>Você fez login pela última vez em " . $avInicioPrivado['fechaHoraUltimaConexionAnterior'] . "</h2>";
            }
        }
    ?>
    <form>
        <input type="submit" name="detalle" value="Detalle" />
    </form>
</main>