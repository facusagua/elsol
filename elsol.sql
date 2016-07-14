-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2016 a las 09:06:13
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `elsol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cli` int(6) NOT NULL AUTO_INCREMENT,
  `cuit` varchar(15) NOT NULL,
  `nomyap` varchar(100) NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `localidad` varchar(100) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cli`, `cuit`, `nomyap`, `empresa`, `localidad`, `tel`, `email`) VALUES
(1, '20291032517', 'rwerwer', 'wrwr', 'werwer', '42424', 'ewrwerw'),
(2, '20291032517', 'Facundo Sagua', 'Ixion', 'San MIguel', '0381153022552', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id_pro` int(5) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(10) NOT NULL,
  `rubro` varchar(30) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `clase` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_pro`, `codigo`, `rubro`, `descripcion`, `clase`) VALUES
(1, '5230304', 'HIERROS CONSTRUCCION', 'HIERRO TORSIONADO 4.2 MM ( 1.180)', 'hierros'),
(2, '5230306', 'HIERROS CONSTRUCCION', 'HIERRO TORSIONADO 6 MM (2.664)', 'hierros'),
(3, '5230308', 'HIERROS CONSTRUCCION', 'HIERRO TORSIONADO 8 MM (4.740)', 'hierros'),
(4, '5230310', 'HIERROS CONSTRUCCION', 'HIERRO TORSIONADO 10 MM (7.404)', 'hierros'),
(5, '5230312', 'HIERROS CONSTRUCCION', 'HIERRO TORSIONADO 12 MM (10.656)', 'hierros'),
(6, '5230316', 'HIERROS CONSTRUCCION', 'HIERRO TORSIONADO 16 MM (18.960)', 'hierros'),
(7, '5230320', 'HIERROS CONSTRUCCION', 'HIERRO TORSIONADO 20 MM (29.640)', 'hierros'),
(8, '5230325', 'HIERROS CONSTRUCCION', 'HIERRO TORSIONADO 25 MM (46.200)', 'hierros');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
