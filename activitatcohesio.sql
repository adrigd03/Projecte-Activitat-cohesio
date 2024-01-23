-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-01-2024 a las 14:01:55
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnes`
--

CREATE TABLE `alumnes` (
  `id` int(30) UNSIGNED NOT NULL,
  `id_grup` int(100) DEFAULT NULL,
  `nom` varchar(45) NOT NULL,
  `clase` varchar(80) NOT NULL,
  `grup` varchar(80) NOT NULL,
  `asistencia` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnes`
--

INSERT INTO `alumnes` (`id`, `id_grup`, `nom`, `clase`, `grup`, `asistencia`) VALUES
(1, 2, 'Eric', 'DAW 2', 'DAW 1', 1),
(2, 0, 'Adrián', 'DAW', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grups`
--

CREATE TABLE `grups` (
  `id` int(100) NOT NULL,
  `nom` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

CREATE TABLE `proves` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `descripcio` text NOT NULL,
  `professsor` varchar(80) NOT NULL,
  `material` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnes`
--
ALTER TABLE `alumnes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grups`
--
ALTER TABLE `grups`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proves`
--
ALTER TABLE `proves`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnes`
--
ALTER TABLE `alumnes`
  MODIFY `id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `grups`
--
ALTER TABLE `grups`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `proves`
--
ALTER TABLE `proves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
