<?php 

require_once('clases/Conexion.php');

if (isset($_COOKIE['j_cedula'])) {

    //Datos del Jugador
    $database = new conexion();
    $jugador = $database->dataUser($_COOKIE['j_cedula']);

    $id = $jugador[0]['id'];
    $nombre = $jugador[0]['nombre_jugador'];
    $cedula = $jugador[0]['cedula'];
    $win = '';

    if (isset($_POST['send'])) {
        
        $resultado = $_POST['respuesta'];
        
        if (isset($_COOKIE['puntos'])) {
            $puntos = $_COOKIE['puntos'];
        } else {
            $puntos = 0;
        }

        if (isset($_COOKIE['consecutivo'])) {
            $consecutivo = $_COOKIE['consecutivo'];
        } else {
            $consecutivo = 0;
        }

        if ($_COOKIE['puntos'] == 25) {
            $update = $database->update_puntos($id, 25);
            setcookie('felicitaciones', 0, time() + 5, 'cookies/'); 
            header ('Location: iniciar.php');
        }
        
        if ($resultado == 1) {

            // Nuevos Valores
            setcookie('puntos', $_COOKIE['puntos'] + 1, time() + 3600, 'cookies/');
            setcookie('consecutivo', $_COOKIE['consecutivo'] + 1, time() + 3600, 'cookies/');

            $puntos = $_COOKIE['puntos'];
            $consecutivo = $_COOKIE['consecutivo'];

            # Calculo de Categoria
            if ($consecutivo >= 1 && $consecutivo <= 5) {
                $categoria = 1;
            } elseif ($consecutivo >= 6 && $consecutivo <= 10) {
                $categoria = 2;
            } elseif ($consecutivo >= 11 && $consecutivo <= 15) {
                $categoria = 3;
            } elseif ($consecutivo >= 16 && $consecutivo <= 20) {
                $categoria = 4;
            } elseif ($consecutivo >= 21 && $consecutivo <= 25) {
                $categoria = 5;
            }

            //Varaibales para Vista
            $categorias_view = $database->categorias(intval($categoria));
            $preguntas_view = $database->preguntas(intval($categorias_view[0]));
            $respuestas_view = $database->respuestas(intval($preguntas_view[0][0]));

        } else {

            $update = $database->update_puntos($id, ($_COOKIE['puntos'] - 1));
            setcookie('resultado', 0, time() + 5, 'cookies/'); 

            setcookie('puntos', 1, time() + 3600, 'cookies/');
            setcookie('consecutivo', 2, time() + 3600, 'cookies/');
            header ('Location: iniciar.php');
        }
    } else {

        //Variables Iniciales.
        # Puntos sobre */25
        $puntos = 0;
        #Consecutivo de Pregunta (aunque vendran en desorden).
        $consecutivo = 1;
        # Calculo de Categoria
        $categoria = 1;

        // Nuevos Valores
        setcookie('puntos', 1, time() + 3600, 'cookies/');
        setcookie('consecutivo', 2, time() + 3600, 'cookies/');

        //Varaibales para Vista
        $categorias_view = $database->categorias(intval($categoria));
        $preguntas_view = $database->preguntas(intval($categorias_view[0]));
        $respuestas_view = $database->respuestas(intval($preguntas_view[0][0]));

    }

    //Vista HTML del Juego
    require 'view/start_game.vista.php';

} else {

    //Como no hay un jugador en cookie se envia a formulario de inicio.
    header ('Location: iniciar.php');
}

?>