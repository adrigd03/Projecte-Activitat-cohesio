-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-01-2024 a las 16:07:48
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `activitatcohesio`
--
CREATE DATABASE IF NOT EXISTS `activitatcohesio` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `activitatcohesio`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnes`
--

DROP TABLE IF EXISTS `alumnes`;
CREATE TABLE IF NOT EXISTS `alumnes` (
  `id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_grup` int(100) DEFAULT NULL,
  `nom` varchar(45) NOT NULL,
  `clase` varchar(80) NOT NULL,
  `grup` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnes`
--

INSERT INTO `alumnes` (`id`, `id_grup`, `nom`, `clase`, `grup`) VALUES
(1, 2, 'Eric', 'DAW 2', 'DAW 1'),
(2, 0, 'Adrián', 'DAW', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grups`
--

DROP TABLE IF EXISTS `grups`;
CREATE TABLE IF NOT EXISTS `grups` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grups`
--

INSERT INTO `grups` (`id`, `nom`) VALUES
(1, 'SMX 1'),
(2, 'DAW 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proves`
--

DROP TABLE IF EXISTS `proves`;
CREATE TABLE IF NOT EXISTS `proves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `descripcio` text NOT NULL,
  `professsor` varchar(80) NOT NULL,
  `material` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
