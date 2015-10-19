-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2015 at 07:48 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sistema_estadistico`
--

-- --------------------------------------------------------

--
-- Table structure for table `barrios`
--

CREATE TABLE IF NOT EXISTS `barrios` (
  `idb` int(100) NOT NULL AUTO_INCREMENT,
  `idd` int(100) NOT NULL,
  `namebarrio` varchar(200) NOT NULL,
  PRIMARY KEY (`idb`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `barrios`
--

INSERT INTO `barrios` (`idb`, `idd`, `namebarrio`) VALUES
(1, 2, '18 de mayo'),
(3, 2, 'Acahualinca'),
(4, 2, 'Batahola Norte'),
(5, 2, 'Batahola Sur'),
(6, 2, 'El Boer'),
(7, 2, 'Francisco Morazán'),
(8, 2, 'Las Brisas'),
(9, 2, 'Linda Vista'),
(10, 2, 'Monseñor Lezcano'),
(11, 2, 'Motastepe'),
(12, 2, 'Valle Dorado'),
(13, 3, 'Altagracia'),
(14, 3, 'Andrés Castro'),
(15, 3, 'Bolonia'),
(16, 3, 'Carlos Nuñez'),
(17, 3, 'Cedro Galán'),
(18, 3, 'Colonia El Periodista'),
(19, 3, 'Germán Pomares'),
(20, 3, 'Hialeah'),
(21, 3, 'Lomas de Guadalupe'),
(22, 3, 'Nejapa'),
(23, 3, 'Omar Torrijo'),
(24, 3, 'San Judas'),
(25, 4, 'Bello Horizonte'),
(26, 4, 'Costa Rica'),
(27, 4, 'Domitila Lugo'),
(28, 4, 'Ducualí'),
(29, 4, 'El Paraisito'),
(30, 4, 'Jorge Dimitrov'),
(31, 4, 'Largaespada'),
(32, 4, 'Larreynaga'),
(33, 4, 'Las Torres'),
(34, 4, 'Maestro Gabriel'),
(35, 4, 'Parrales Vallejos'),
(36, 4, 'Plaza El Sol	'),
(37, 5, '10 de Junio'),
(38, 5, '14 de Septiembre'),
(39, 5, 'Colonia Centro América'),
(40, 5, 'Colonia Don Bosco'),
(41, 5, 'Colonia Proyecto Piloto'),
(42, 5, 'El Dorado'),
(43, 5, 'Farabundo Martí'),
(44, 5, 'Georgino Andrade'),
(45, 5, 'Grenada'),
(46, 5, 'Las Colinas'),
(47, 5, 'Las Jaguitas	'),
(48, 5, 'Reparto Schick'),
(49, 1, 'Ruben Dario'),
(50, 1, '19 de Julio'),
(51, 1, 'Jorje Dimitrov'),
(52, 1, 'Francisco Meza'),
(53, 1, 'Redentor'),
(54, 1, 'Riguero'),
(55, 1, 'Habana'),
(56, 1, 'Dorado'),
(57, 1, 'Mexico'),
(58, 1, 'Revolucion'),
(59, 1, 'Liberia'),
(60, 1, '14 de Junio'),
(61, 1, 'Robles');

-- --------------------------------------------------------

--
-- Table structure for table `denucias`
--

CREATE TABLE IF NOT EXISTS `denucias` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `sexo` varchar(200) NOT NULL,
  `edad` varchar(200) NOT NULL,
  `hora` varchar(200) NOT NULL,
  `fecha` datetime NOT NULL,
  `distrito` varchar(200) NOT NULL,
  `barrio` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `denuncia` varchar(200) NOT NULL,
  `solucion` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `distritos`
--

CREATE TABLE IF NOT EXISTS `distritos` (
  `idd` int(100) NOT NULL AUTO_INCREMENT,
  `namedistrito` varchar(200) NOT NULL,
  PRIMARY KEY (`idd`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `distritos`
--

INSERT INTO `distritos` (`idd`, `namedistrito`) VALUES
(1, 'distrito 1'),
(2, 'distrito 2'),
(3, 'distrito 3'),
(4, 'distrito 4'),
(5, 'distrito 5'),
(6, 'distrito 6'),
(7, 'distrito 7');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
