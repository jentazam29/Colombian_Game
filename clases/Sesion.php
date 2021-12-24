<?php 

class Sesion { 

    public $cedula;

    public function start($cedula) {
        setcookie('j_cedula', $cedula, time() + 3600, 'cookies/');
    }

    public function destroy() {
        setcookie('j_cedula', null, time() - 3600, 'cookies/');
    }
}

?>