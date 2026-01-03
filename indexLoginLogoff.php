<?php 
   
/**
 * @author Alejandro De la Huerga
 * @since 16/12/2025
 */

   // Cargamos los archivos de configuración
   require_once 'config/confAPP.php';
   require_once 'config/confDBPDO.php';
   require_once 'model/Usuario.php';
   
   // Iniciamos la sesión
   session_start();

   // Si no esta la página en curso con la sesión la creamos con inicio público.
   if(!isset($_SESSION['paginaEnCurso'])){
      $_SESSION['paginaEnCurso'] = 'inicioPublico';
   }

   // Cargamos el controlador de la página en curso.
   require_once $controller[$_SESSION['paginaEnCurso']];
   // require_once $view[$_SESSION['paginaEnCurso']];
?>