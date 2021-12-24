<?php 

// Clases
require_once('clases/Conexion.php');

//historico de Metodo de Clase
$database = new Conexion();
$statement = $database->historico();

//Vista HTML
require 'view/historico.vista.php';

?>