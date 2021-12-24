<?php 

require_once('clases/Conexion.php');
require_once('clases/Sesion.php');

// Eliminar Cookies de Usuarios
$sesion = new Sesion();
$sesion->destroy();

// Eliminar Cookies de Puntuacion
setcookie('puntos', null, time() - 1, 'cookies/');
setcookie('consecutivo', null, time() - 1, 'cookies/');

// Redireccionar
header ('Location: iniciar.php');

?>