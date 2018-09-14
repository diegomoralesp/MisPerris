-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-09-2018 a las 14:48:22
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `misperris`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
CREATE TABLE IF NOT EXISTS `ciudad` (
  `idciudad` int(11) NOT NULL,
  `nombre` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `region_idregion` int(11) NOT NULL,
  PRIMARY KEY (`idciudad`),
  KEY `fk_ciudad_region` (`region_idregion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`idciudad`, `nombre`, `region_idregion`) VALUES
(1, '\0Puente Alto', 1),
(2, 'La Florida', 1),
(3, '\0Maipu', 1),
(4, 'Las Condes', 1),
(5, '\0Macul', 1),
(6, '\0ViÃ±a del Mar', 2),
(7, 'Quillota', 2),
(8, '\0San Antonio', 2),
(9, '\0Cartajena', 2),
(10, '\0La Calera', 2),
(100, '\0Dubai', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

DROP TABLE IF EXISTS `mascota`;
CREATE TABLE IF NOT EXISTS `mascota` (
  `idmascota` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `nombre` varchar(45) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `raza` varchar(20) NOT NULL,
  `observacion` varchar(200) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  PRIMARY KEY (`idmascota`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`idmascota`, `fecha_ingreso`, `nombre`, `edad`, `raza`, `observacion`, `sexo`) VALUES
(1, '2018-09-13', 'doggito', 3, 'Salchicha', 'Perro juguetÃ³n, le gusta correr, salir a pasear.', 'Macho'),
(2, '2018-09-04', 'chapulin', 4, 'poodle', 'Perro juguetÃ³n, le gusta correr, salir a pasear.', 'Hembra'),
(3, '2018-09-08', 'snoopy', 1, 'desconocida', 'sano', 'Macho'),
(5, '2017-02-01', 'Lomito', 5, 'desconocida', 'Perro Muy Gordito', 'Macho'),
(6, '2018-08-29', 'Taco', 1, 'Chiguagua', 'Es loco y come tacos', 'Macho'),
(15, '2018-09-06', 'bonobon', 5, 'diablo', 'es satÃ¡nico', 'Hembra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulante`
--

DROP TABLE IF EXISTS `postulante`;
CREATE TABLE IF NOT EXISTS `postulante` (
  `run` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha_nac` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `ciudad` varchar(45) NOT NULL,
  `tipo_vivienda` varchar(30) NOT NULL,
  PRIMARY KEY (`run`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `postulante`
--

INSERT INTO `postulante` (`run`, `nombre`, `fecha_nac`, `email`, `telefono`, `genero`, `direccion`, `ciudad`, `tipo_vivienda`) VALUES
('', 'cachupin', '2001-09-06', 'kiko@kiko.kiko', 2, 'Masculino', 'vecindad del chocho', '', '2'),
('12120', 'chapulin', '2001-01-01', 'kiko@kiko.kiko', 123456789, 'Masculino', 'vecindad del chocho', '1', '1'),
('12120000', 'snoopy', '2001-08-27', 'sasa@ssd.com', 23667676, 'Indefinido', 'vecindad del chocho', '', '3'),
('122233', 'cachupin', '2001-01-01', '12', 2, 'Masculino', '22221', '6', '3'),
('12322444-k', 'snoopy', '2001-09-10', 'ReyApoloIX@gmail.tk', 900000000, 'Otros', '22221', '', '3'),
('123456789-', 'cachupin', '2001-09-08', 'kiko@kiko.kiko', 1112, 'Masculino', '2121212', '8', '2'),
('12938475-5', 'Alberto Medina', '1892-03-03', 'medirooo@hotmail.cl', 999999999, 'Hombre Lobo', 'vecindad del chocho', '6', '2'),
('14958968-9', 'Gato Medina', '1892-03-03', 'medirooo@hotmail.cl', 986759375, 'Hombre Lobo', 'vecindad del chocho', '100', '1'),
('1827272272', 'snoopy', '2001-01-01', '12', 222, 'Masculino', 'vecindad del chocho', '7', '3'),
('1999282828', 'wqeee', '1998-09-19', 'ReyApoloIX@gmail.tk', 900000000, 'Indefinido', 'wertyu', '9', '3'),
('6544444444', 'chapulin', '2001-01-01', 'kiko@kiko.kiko', 2212122, 'Masculino', 'vecindad del chocho', '7', '2'),
('7626252222', 'qwwq', '2001-09-06', '123ewe@eqwehqhe.cow', 987383763, 'Femenino', 'wweieweqewqe', '', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `idregion` int(11) NOT NULL,
  `nombre` varchar(45) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`idregion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`idregion`, `nombre`) VALUES
(1, 'RegiÃ³n Metropolitana'),
(2, 'ValparaÃ­so');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vivienda`
--

DROP TABLE IF EXISTS `tipo_vivienda`;
CREATE TABLE IF NOT EXISTS `tipo_vivienda` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_vivienda`
--

INSERT INTO `tipo_vivienda` (`id_tipo`, `tipo`) VALUES
(1, 'Casa con Patio Grande'),
(2, 'Casa con Patio Pequeño'),
(3, 'Casa Sin Patio'),
(4, 'Departamento');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `fk_ciudad_region` FOREIGN KEY (`region_idregion`) REFERENCES `region` (`idregion`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
