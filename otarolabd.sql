-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2016 a las 09:27:05
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `otarolabd`
--
CREATE DATABASE IF NOT EXISTS `otarolabd` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `otarolabd`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablitausuario`
--

CREATE TABLE IF NOT EXISTS `tablitausuario` (
  `id` int(20) NOT NULL AUTO_INCREMENT COMMENT 'Soy la id',
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Soy el nombre para ti',
  `pass` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Soy ***',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tablitausuario`
--

INSERT INTO `tablitausuario` (`id`, `usuario`, `pass`) VALUES
(1, 'otarolin', 'soyotarolin'),
(2, 'adrian', 'adrialin'),
(5, 'thor', 'loki');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
