<?php 
/**
 * @author Alejandro De la Huerga
 * @since 16/12/2025
 */

  if(isset($_REQUEST["iniciarSesion"])){
      $_SESSION['paginaEnCurso']='login';
      header('location: indexLoginLogoff.php');
      exit;
  }

  // cargamos el layout principal, y cargará cada página a parte de la estructura principal de la web
  require_once $view['layout'];
 
?>