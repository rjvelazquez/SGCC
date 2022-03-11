-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2018 a las 07:36:06
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bdcc3m`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `username` varchar(100) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `hora` varchar(100) NOT NULL,
  `operacion` varchar(100) NOT NULL,
  `id` int(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Volcado de datos para la tabla `logs`
--

INSERT INTO `logs` (`username`, `fecha`, `hora`, `operacion`, `id`) VALUES
('admin', '2018/05/03', '22:50:34', 'inicio de sesion', 1),
('admin', '2018/05/03', '23:29:17', 'listado general', 2),
('admin', '2018/05/03', '23:33:17', 'listado general', 3),
('admin', '2018/05/03', '23:35:41', 'listado general', 4),
('admin', '2018/05/03', '23:36:08', 'listado general', 5),
('admin', '2018/05/03', '23:36:24', 'listado general', 6),
('admin', '2018/05/03', '23:43:13', 'listado general', 7),
('admin', '2018/05/03', '23:43:45', 'listado general', 8),
('admin', '2018/05/04', '00:02:20', 'inicio de sesion', 9),
('admin', '2018/05/04', '00:10:02', 'nuevo registro', 10),
('admin', '2018/05/04', '00:10:05', 'listado general', 11),
('admin', '2018/05/04', '00:10:08', 'listado general', 12),
('admin', '2018/05/04', '00:10:09', 'listado general', 13),
('admin', '2018/05/04', '00:10:10', 'listado general', 14),
('admin', '2018/05/04', '00:10:11', 'listado general', 15),
('admin', '2018/05/04', '00:13:37', 'listado general', 16),
('admin', '2018/05/04', '00:14:07', 'nuevo registro', 17),
('admin', '2018/05/04', '00:14:23', 'listado general', 18),
('admin', '2018/05/04', '00:15:34', 'listado general', 19),
('admin', '2018/05/04', '00:15:46', 'listado general', 20),
('admin', '2018/05/04', '00:20:44', 'listado general', 21),
('admin', '2018/05/04', '00:22:00', 'nuevo registro', 22),
('admin', '2018/05/04', '00:22:04', 'listado general', 23),
('admin', '2018/05/04', '00:32:39', 'listado general', 24),
('admin', '2018/05/04', '00:34:09', 'nuevo registro', 25),
('admin', '2018/05/04', '00:34:14', 'listado general', 26),
('admin', '2018/05/04', '00:34:16', 'listado general', 27),
('admin', '2018/05/04', '00:34:38', 'nuevo registro', 28),
('admin', '2018/05/04', '00:34:42', 'listado general', 29),
('admin', '2018/05/04', '00:37:11', 'listado general', 30),
('admin', '2018/05/04', '00:37:40', 'listado general', 31),
('admin', '2018/05/04', '00:37:41', 'listado general', 32),
('admin', '2018/05/04', '00:37:56', 'listado general', 33),
('admin', '2018/05/04', '00:38:03', 'listado general', 34),
('admin', '2018/05/04', '00:38:13', 'listado general', 35),
('admin', '2018/05/04', '00:40:11', 'listado general', 36),
('admin', '2018/05/04', '00:41:20', 'listado general', 37),
('admin', '2018/05/04', '00:43:40', 'listado general', 38),
('admin', '2018/05/04', '00:43:42', 'listado general', 39),
('admin', '2018/05/04', '00:43:45', 'listado general', 40),
('admin', '2018/05/04', '01:16:26', 'listado general', 41),
('admin', '2018/05/04', '01:16:30', 'listado general', 42),
('admin', '2018/05/04', '01:16:34', 'listado general', 43),
('admin', '2018/05/04', '01:25:42', 'listado general', 44),
('admin', '2018/05/04', '01:28:20', 'listado general', 45),
('admin', '2018/05/04', '01:29:47', 'listado general', 46),
('admin', '2018/05/04', '01:30:01', 'cierre de sesion', 47),
('admin', '2018/05/04', '01:30:12', 'inicio de sesion', 48),
('admin', '2018/05/04', '01:30:14', 'listado general', 49),
('admin', '2018/05/04', '01:30:22', 'listado general', 50),
('admin', '2018/05/04', '01:34:14', 'listado general', 51),
('admin', '2018/05/04', '01:34:20', 'listado general', 52),
('admin', '2018/05/04', '01:35:29', 'listado general', 53),
('admin', '2018/05/04', '01:35:30', 'listado general', 54),
('admin', '2018/05/04', '01:35:32', 'listado general', 55),
('admin', '2018/05/04', '01:35:33', 'listado general', 56),
('admin', '2018/05/04', '01:35:43', 'cierre de sesion', 57);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE IF NOT EXISTS `registros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfamilia` int(15) NOT NULL,
  `Cedula` int(15) NOT NULL,
  `Nombres` varchar(100) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Edad` varchar(4) NOT NULL,
  `Genero` varchar(100) NOT NULL,
  `F_N` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `idfamilia`, `Cedula`, `Nombres`, `Apellidos`, `Edad`, `Genero`, `F_N`) VALUES
(1, 25954475, 25954475, 'r', 'fs', '20', 'M', '1996-12-07'),
(2, 25954475, 7020153, 'Doratriz', 'Velasquez', '59', 'F', '1959-04-21'),
(3, 18628546, 18628546, 'a', 's', '12', 'F', '1986-07-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
