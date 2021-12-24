<?php

require_once('clases/Sesion.php');
require_once('clases/Conexion.php');

if (isset($_POST['start'])) {

    $cedula = trim(intval($_POST['cedula']));
    $nombre = trim(ucwords(strtolower($_POST['nombre'])));

    //Creacion de Cookies
    $sesion = new Sesion();
    $sesion->start($cedula);

    //Creación de Usuario
    $database = new Conexion();
    $database->agregarJugador($cedula, $nombre);

    // Redireccion del Inicio del Juego
    header ('Location: start_game.php');

}

//Vista HTML
require 'view/iniciar.vista.php';

?>