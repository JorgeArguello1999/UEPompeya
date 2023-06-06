-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 06, 2023 at 02:53 AM
-- Server version: 5.7.40
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uepompeya`
--

-- --------------------------------------------------------

--
-- Table structure for table `articulos`
--

DROP TABLE IF EXISTS `articulos`;
CREATE TABLE IF NOT EXISTS `articulos` (
  `idarticulos` int(11) NOT NULL AUTO_INCREMENT,
  `idautor` int(11) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Contenido` text NOT NULL,
  `FechaPublicacion` date NOT NULL,
  `idetiqueta` int(11) DEFAULT NULL,
  `idcomentario` int(11) DEFAULT NULL,
  `ImagenPrincipal` varchar(255) DEFAULT NULL,
  `URLAmigable` varchar(255) DEFAULT NULL,
  `Estado` enum('activo','inactivo','borrador') DEFAULT 'activo',
  `FechaCreacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `FechaActualizacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Valoracion` decimal(3,1) DEFAULT NULL,
  PRIMARY KEY (`idarticulos`),
  KEY `idautor` (`idautor`),
  KEY `idetiqueta` (`idetiqueta`),
  KEY `idcomentario` (`idcomentario`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articulos`
--

INSERT INTO `articulos` (`idarticulos`, `idautor`, `Titulo`, `Contenido`, `FechaPublicacion`, `idetiqueta`, `idcomentario`, `ImagenPrincipal`, `URLAmigable`, `Estado`, `FechaCreacion`, `FechaActualizacion`, `Valoracion`) VALUES
(1, 1, 'Introducción a la programación', 'Contenido del artículo...', '2023-05-01', 1, 1, 'imagen1.jpg', 'introduccion-a-programacion', 'activo', '2023-06-05 17:49:23', '2023-06-05 17:49:23', '4.5'),
(2, 2, 'Los mejores destinos turísticos', 'Contenido del artículo...', '2023-05-02', 2, 2, 'imagen2.jpg', 'mejores-destinos-turisticos', 'activo', '2023-06-05 17:49:23', '2023-06-05 17:49:23', '4.2'),
(3, 3, 'Consejos para mejorar en el fútbol', 'Contenido del artículo...', '2023-05-03', 3, 3, 'imagen3.jpg', 'consejos-mejorar-futbol', 'activo', '2023-06-05 17:49:23', '2023-06-05 17:49:23', '4.7');

-- --------------------------------------------------------

--
-- Table structure for table `autor`
--

DROP TABLE IF EXISTS `autor`;
CREATE TABLE IF NOT EXISTS `autor` (
  `idautor` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(200) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `foto` blob,
  PRIMARY KEY (`idautor`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autor`
--

INSERT INTO `autor` (`idautor`, `nombres`, `cedula`, `correo`, `foto`) VALUES
(1, 'Juan Pérez', '1234567890', 'juan@example.com', NULL),
(2, 'María González', '0987654321', 'maria@example.com', NULL),
(3, 'Pedro Rodríguez', '9876543210', 'pedro@example.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `idcomentario` int(11) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comentarios`
--

INSERT INTO `comentarios` (`idcomentario`, `comentario`) VALUES
(0, 'Excelente artículo'),
(0, 'Muy interesante'),
(0, 'Gracias por compartir');

-- --------------------------------------------------------

--
-- Table structure for table `etiquetas`
--

DROP TABLE IF EXISTS `etiquetas`;
CREATE TABLE IF NOT EXISTS `etiquetas` (
  `idetiqueta` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idetiqueta`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etiquetas`
--

INSERT INTO `etiquetas` (`idetiqueta`, `nombre`) VALUES
(1, 'Tecnología'),
(2, 'Viajes'),
(3, 'Deportes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
