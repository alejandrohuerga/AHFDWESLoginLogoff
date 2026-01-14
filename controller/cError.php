<?php 
    /**
     * @author Alejandro De la Huerga
     * @since 14/01/2026
     * 
     * Controlador de la clase Error , administra el mensaje producido voluntariamente.
     */

    // Si se intenta acceder a la página sin iniciar sesión resirige a la Inicio publico.
    if(empty($_SESSION['usuarioDAW202LoginLogoff'])) {
        $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
        // Redirige a la página de inicio.
        $_SESSION['paginaEnCurso'] = 'inicioPublico';
        header("location: indexLoginLogoff.php");  
        exit;
    }
    
    // Almacenamos los datos del error de la sesión.
    if(isset($_SESSION['error'])){

    }
?>