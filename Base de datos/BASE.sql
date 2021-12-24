-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.21-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para reto
CREATE DATABASE IF NOT EXISTS `reto` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `reto`;

-- Volcando estructura para tabla reto.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COMMENT='Se almacenan por categoria los 5 niveles del juego';

-- Volcando datos para la tabla reto.categoria: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`id`, `categoria`) VALUES
	(1, 'CATEGORIA BASICO'),
	(2, 'CATEGORIA BASICO II'),
	(3, 'CATEGORIA INTERMEDIO'),
	(4, 'CATEGORIA INTERMEDIO II'),
	(5, ' CATEGORIA AVANZADO');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Volcando estructura para tabla reto.historico_puntaje
CREATE TABLE IF NOT EXISTS `historico_puntaje` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jugador_id` int(11) NOT NULL DEFAULT 0,
  `puntaje` varchar(255) NOT NULL DEFAULT '0',
  `fecha_hora` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Se almacena el puntaje';

-- Volcando datos para la tabla reto.historico_puntaje: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `historico_puntaje` DISABLE KEYS */;
/*!40000 ALTER TABLE `historico_puntaje` ENABLE KEYS */;

-- Volcando estructura para tabla reto.jugadores
CREATE TABLE IF NOT EXISTS `jugadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_jugador` varchar(255) NOT NULL DEFAULT '0',
  `cedula` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cedula` (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Se almacena los datos de los concursantes';

-- Volcando datos para la tabla reto.jugadores: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `jugadores` DISABLE KEYS */;
/*!40000 ALTER TABLE `jugadores` ENABLE KEYS */;

-- Volcando estructura para tabla reto.preguntas
CREATE TABLE IF NOT EXISTS `preguntas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_id` int(11) NOT NULL DEFAULT 0,
  `pregunta` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COMMENT='Tabla que almacena las preguntas por cada categoria';

-- Volcando datos para la tabla reto.preguntas: ~25 rows (aproximadamente)
/*!40000 ALTER TABLE `preguntas` DISABLE KEYS */;
INSERT INTO `preguntas` (`id`, `categoria_id`, `pregunta`) VALUES
	(1, 1, '¿Cuál es la moneda de Colombia? '),
	(2, 1, '¿El nombre de "Colombia" hace referencia al español?'),
	(3, 1, '¿Cuál es la lengua oficial de Colombia? '),
	(4, 1, '¿Cuáles eran las tres grandes familias nativas americanas que poblaban Colombia en el siglo XV? '),
	(5, 1, '¿Quién fundó Santa Marta, capital del departamento Magdalena en Colombia? '),
	(6, 2, ' ¿Cuál es la forma de gobierno de Colombia?'),
	(7, 2, '¿Cuál es el departamento más poblado de Colombia?'),
	(8, 2, '¿De qué artista colombiano es la obra La Mona Lisa a los 12 años?'),
	(9, 2, '¿Qué cordillera atraviesa el territorio colombiano?'),
	(10, 2, '¿Cuál es la montaña más alta de Colombia?'),
	(11, 3, '¿Cuál es el aeropuerto de la ciudad de Bogota?'),
	(12, 3, '¿Cuál es la flor nacional de Colombia?'),
	(13, 3, '¿Cuál es el principal puerto marítimo de Colombia?'),
	(14, 3, '¿Qué colombiano escribió la famosa novela romántica María?'),
	(15, 3, '¿Cuál es el lago más grande de Colombia?'),
	(16, 4, '¿Cuál fue la primera colonia en continente americano ubicada en el actual territorio de Colombia?'),
	(17, 4, '¿En qué municipio se encuentra la catarata del  Salto del Tequendama?'),
	(18, 4, '¿Cuáles son las 6 regiones naturales de Colombia?'),
	(19, 4, '¿Qué tratado dio fin a la Guerra de los Mil Días? '),
	(20, 4, '¿Cuántas vertientes hidrográficas hay en Colombia? '),
	(21, 5, '¿En dónde nace el río Magdalena en Colombia? '),
	(22, 5, '¿Cuál es el grupo indígena más numeroso de Colombia?'),
	(23, 5, '¿En dónde se encuentra la refinería de petróleo más grande de Colombia? '),
	(24, 5, '¿Quién lideró la rebelión de esclavos en Cartagena en 1599?'),
	(25, 5, '¿Con qué país conformó Colombia la República de Nueva Granada (1832-1858)? ');
/*!40000 ALTER TABLE `preguntas` ENABLE KEYS */;

-- Volcando estructura para tabla reto.respuestas
CREATE TABLE IF NOT EXISTS `respuestas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta_id` int(11) NOT NULL DEFAULT 0,
  `respuesta` varchar(255) NOT NULL DEFAULT '0',
  `tipo_respuesta` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COMMENT='Almacena las respuestas de cada pregunta dependiendo la categoria';

-- Volcando datos para la tabla reto.respuestas: ~100 rows (aproximadamente)
/*!40000 ALTER TABLE `respuestas` DISABLE KEYS */;
INSERT INTO `respuestas` (`id`, `pregunta_id`, `respuesta`, `tipo_respuesta`) VALUES
	(1, 1, 'Bolivar', 0),
	(2, 1, 'Dólar', 0),
	(3, 1, 'Peso', 1),
	(4, 1, 'Euros', 0),
	(5, 2, 'Hernán Cortés', 0),
	(6, 2, 'Cristóbal Colón	', 1),
	(7, 2, 'Francisco de paula Santander', 0),
	(8, 2, 'Simon Bolivar', 0),
	(9, 3, 'Ingles', 0),
	(10, 3, 'Español', 1),
	(11, 3, 'Portugues', 0),
	(12, 3, 'Frances', 0),
	(13, 4, 'Los Caribes, los Arawaks y los Muiscas 		', 1),
	(14, 4, '"\nAchagua, Kawiyarí,Tikuna"', 0),
	(15, 4, 'Macaguaje, Piaroa, Tsiripu', 0),
	(16, 4, 'Macusa Pisamira Tuyuca', 0),
	(17, 5, 'Francisco de paula Santander', 0),
	(18, 5, 'Simon Bolivar', 0),
	(19, 5, 'Rodrigo de Bastidas	', 1),
	(20, 5, 'Cristóbal Colón', 0),
	(21, 6, 'parlamentaria', 0),
	(22, 6, 'socialista', 0),
	(23, 6, 'presidencialista	', 1),
	(24, 6, 'Constitucional', 0),
	(25, 7, 'Bogota', 1),
	(26, 7, 'Antioquia', 0),
	(27, 7, 'Valle del cauca', 0),
	(28, 7, 'Atlantico', 0),
	(29, 8, 'De Painter', 0),
	(30, 8, 'De Fernando Botero.	', 1),
	(31, 8, 'De Alejandro Obregon', 0),
	(32, 8, 'De Enrique Grau', 0),
	(33, 9, 'La Cordillera del caribe', 0),
	(34, 9, 'La Cordillera de la amazonia', 0),
	(35, 9, 'La Cordillera del pacifico', 0),
	(36, 9, 'La Cordillera de los Andes	', 1),
	(37, 10, 'Nevado del huila', 0),
	(38, 10, 'El pico Cristóbal Colón	', 1),
	(39, 10, 'Nevado del Tolima', 0),
	(40, 10, 'Volcan Galeras', 0),
	(41, 11, 'Aeropuerto Internacional El Dorado.		', 1),
	(42, 11, 'Aeropuerto Internacional Ernesto Cortissoz', 0),
	(43, 11, 'Aeropuerto Internacional Palonegr', 0),
	(44, 11, 'Aeropuerto Internacional Rafael Núñez ', 0),
	(45, 12, 'El girasol', 0),
	(46, 12, 'La orquidea', 1),
	(47, 12, 'Las rosas', 0),
	(48, 12, 'Claveles', 0),
	(49, 13, 'El Puerto de Tumaco', 0),
	(50, 13, 'El Puerto de Buenaventuralia		', 1),
	(51, 13, 'El Puerto de Cartagena', 0),
	(52, 13, 'El Puerto de Santa Marta', 0),
	(53, 14, 'Gabriel Garcia Marquez', 0),
	(54, 14, 'Jorge Isaacs.', 1),
	(55, 14, 'Fernando Vallejo', 0),
	(56, 14, 'Mario Mendoza', 0),
	(57, 15, ' Laguna del Otún', 0),
	(58, 15, ' Laguna de Fúquene', 0),
	(59, 15, 'El Lago de Tota	', 1),
	(60, 15, ' Embalse Peñol-Guatapé', 0),
	(61, 16, 'Santa Cruz', 1),
	(62, 16, 'La candelaria', 0),
	(63, 16, 'San Felipe', 0),
	(64, 16, 'Los puentes', 0),
	(65, 17, 'Tunja', 0),
	(66, 17, 'Soacha', 1),
	(67, 17, 'Villavicencio', 0),
	(68, 17, 'Popayan', 0),
	(69, 18, 'La region desierto,selva,Taiga y Sabana', 0),
	(70, 18, 'La region clima,minerales,tiempo y relieve', 0),
	(71, 18, 'La region Bosque,pradera,ecuatorial,mediterranea', 0),
	(72, 18, 'La región amazónica, andina, caribe, insular, orinoquía y pacífica				', 1),
	(73, 19, 'Acuerdo de paz con las FARC', 0),
	(74, 19, 'Tratado de paz con el M19', 0),
	(75, 19, 'El Tratado de la Paz de Wisconsin		', 1),
	(76, 19, 'Tratado de paz con los jovenes', 0),
	(77, 20, 'Seis', 0),
	(78, 20, 'Dos', 0),
	(79, 20, 'Diez', 0),
	(80, 20, 'Cuatro', 1),
	(81, 21, 'En el macizo colombiano.	', 1),
	(82, 21, 'El nudo de los pastos', 0),
	(83, 21, 'El paramo de sumapaz', 0),
	(84, 21, 'Nudo de Santurban', 0),
	(85, 22, 'Los Caribes', 0),
	(86, 22, ' los Arawaks', 0),
	(87, 22, 'La etnia Wayuu	\r\n', 1),
	(88, 22, 'los Muiscas ', 0),
	(89, 23, 'En el distrito Barrancabermeja.		', 1),
	(90, 23, 'En el distrito Valledupar', 0),
	(91, 23, 'En el distrito Amazonia', 0),
	(92, 23, 'En el distrito  del llano', 0),
	(93, 24, 'Simon Bolivar', 0),
	(94, 24, 'Benkos Biohó	', 1),
	(95, 24, 'El papa Urbano II', 0),
	(96, 24, 'Gerardo Leon', 0),
	(97, 25, 'Con Venezuela', 0),
	(98, 25, 'Con Peru', 0),
	(99, 25, 'Con Brazil', 0),
	(100, 25, 'Con Panamá', 1);
/*!40000 ALTER TABLE `respuestas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
