<?php 
/**
 * @author Alejandro De la Huerga
 * @since 16/12/2025
 */
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alejandro De la Huerga - LoginLogoff</title>
    <link rel="stylesheet" href="webroot/css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitcount+Grid+Double:wght@100..900&family=Play:wght@400;700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <p>LOGIN LOGOFF TEMA 5</p>
        <h2 id="inicioPublico">INICIO PÚBLICO</h2>
        <form>
            <input type="submit" name="iniciarSesion" value="INICIAR SESIÓN"/>
            <button type="submit" name="idioma" value="en">
                <img src="doc/images/reino-unido.png" alt="Ingles">
            </button>
            <button type="submit" name="idioma" value="es">
                <img src="doc/images/spain.png" alt="Español">
            </button>
            <button type="submit" name="idioma" value="pt">
                <img src="doc/images/portugal.png" alt="Portugues">
            </button>
        </form> 
    </header>
    <main>
        <?php require_once $view[$_SESSION['paginaEnCurso']];?>
    </main>
    <footer>
        <p class="nombre"><a href="https://alejandrohuefer.ieslossauces.es/">Alejandro De la Huerga Fernández</a><p>
        <p class="webImitada"><a href="https://www.faceit.com/es">Página Web imitada</a><p>
        <a href="https://github.com/alejandrohuerga/AHFDWESLoginLogoff.git">
            <img src="doc/images/icone-github-grise.png"> 
        </a>
    </footer>
</body>
</html>