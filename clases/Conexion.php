<?php 

class Conexion extends PDO {

   private $tipo_de_base = 'mysql';
   private $host = 'localhost';
   private $nombre_de_base = 'reto';
   private $usuario = 'root';
   private $contrasena = ''; 

   public function __construct() {
      //Sobreescribo el método constructor de la clase PDO.
      try{
         parent::__construct("{$this->tipo_de_base}:dbname={$this->nombre_de_base};host={$this->host};charset=utf8", $this->usuario, $this->contrasena);
      }catch(PDOException $e){
         echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
         exit;
      }
   }

   public function historico(){

      $database = new Conexion();
      $statement = $database->prepare("SELECT jugadores.cedula AS cedula, jugadores.nombre_jugador AS nombre, historico_puntaje.puntaje AS puntaje, historico_puntaje.fecha_hora AS fecha FROM jugadores INNER JOIN historico_puntaje ON jugadores.id = historico_puntaje.jugador_id ORDER BY historico_puntaje.id DESC");
      $statement->execute();
      $statement = $statement->fetchAll();

      return $statement;
   }

   public function agregarJugador($cedula, $nombre){
      
      $database = new Conexion();

      //Validar si ya esta creado en la base de datos.
      $found_rows = $database->prepare("SELECT COUNT(*) AS TOTAL FROM jugadores WHERE cedula = $cedula");
      $found_rows->execute();
      $found_rows = $found_rows->fetch()['TOTAL'];

      //Si no existe en la base de datos, crear el jugador. (campo KEY UNIQUE Cedula)
      if ($found_rows == 0) {

         $cedula = "'" . $cedula . "'";
         $nombre = "'" . $nombre . "'";

         $insert = $database->query("INSERT INTO `jugadores` (`id`, `nombre_jugador`, `cedula`) VALUES (null, $nombre, $cedula);
         ");
      }
   }

   public function dataUser($cedula) {
        
      $database = new Conexion();

      $jugador = $database->prepare("SELECT * FROM jugadores WHERE cedula = $cedula");
      $jugador->execute();
      $jugador = $jugador->fetchAll();

      return $jugador;
   }

   public function categorias($categoria) {
        
      $database = new Conexion();

      $categorias = $database->prepare("SELECT * FROM categoria WHERE id = $categoria");
      $categorias->execute();
      $categorias = $categorias->fetch();

      return $categorias;
   }

   public function preguntas($categoria_id) {
        
      $database = new Conexion();

      $preguntas = $database->prepare("SELECT * FROM preguntas WHERE categoria_id = $categoria_id ORDER BY RAND()");
      $preguntas->execute();
      $preguntas = $preguntas->fetchAll();

      return $preguntas;
   }

   public function respuestas($pregunta_id) {
      
      $database = new Conexion();

      $respuestas = $database->prepare("SELECT * FROM respuestas WHERE pregunta_id = $pregunta_id ORDER BY RAND()");
      $respuestas->execute();
      $respuestas = $respuestas->fetchAll();

      return $respuestas;
   }

   public function update_puntos($id, $puntos) {

      $puntos = $puntos . '/25';
      $puntos = "'" . $puntos . "'";

      $datatime = date("Y-m-d\ H:i:s");
		$datatime = "'" . $datatime . "'";
      
      $database = new Conexion();
      $insert = $database->query("INSERT INTO `historico_puntaje` (`id`, `jugador_id`, `puntaje`, `fecha_hora`) VALUES (null, $id, $puntos, $datatime)");

   }
}

?>