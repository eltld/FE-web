-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-06-2015 a las 22:28:51
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_fe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_noticia`
--

CREATE TABLE IF NOT EXISTS `t_noticia` (
  `id_not` int(8) NOT NULL AUTO_INCREMENT,
  `not_titulo` varchar(255) NOT NULL,
  `not_fecha` date NOT NULL,
  `not_autor` varchar(255) NOT NULL,
  `not_cuerpo` text NOT NULL,
  `not_url` varchar(255) NOT NULL,
  `not_url_image` varchar(255) NOT NULL,
  PRIMARY KEY (`id_not`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
