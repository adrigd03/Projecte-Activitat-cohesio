-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2024 a las 15:10:06
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
(1, 93, 'Eric', 'DAW 2', 'DAW 2', 1),
(2, NULL, 'Adrián', 'DAW 1', '', 1),
(3, 93, 'Pere', 'DAW 2', 'DAW 2', 1),
(4, 93, 'Marta', 'DAW 2', 'DAW 2', 1),
(5, NULL, 'Alex', 'DAW 2', '', 0),
(6, NULL, 'Raul', 'DAW 2', '', 0),
(7, NULL, 'Dani', 'DAW 2', '', 0),
(8, NULL, 'Biel', 'DAW 2', '', 0),
(9, 92, 'Benito', 'DAW 1', 'DAW 6', 1),
(10, 92, 'Maria', 'DAW 1', 'DAW 6', 1),
(11, NULL, 'Aina', 'DAW 1', '', 0),
(12, NULL, 'Sergi', 'DAW 1', '', 0),
(13, 92, 'Dani', 'DAW 1', 'DAW 6', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grups`
--

CREATE TABLE `grups` (
  `id` int(100) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `victories` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grups`
--

INSERT INTO `grups` (`id`, `nom`, `victories`) VALUES
(92, 'DAW 6', 0),
(93, 'DAW 2', 0),
(95, 'Nou Grup', 0),
(97, 'Nou Grup', 0),
(99, 'Nou Grup', 0),
(100, 'Nou Grup', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proves`
--

CREATE TABLE `proves` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `descripcio` text NOT NULL,
  `lloc` varchar(50) NOT NULL,
  `professor` varchar(80) NOT NULL,
  `material` varchar(80) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proves`
--

INSERT INTO `proves` (`id`, `nom`, `descripcio`, `lloc`, `professor`, `material`, `lat`, `lng`) VALUES
(6, 'Mocador', 'asdasdsa', 'dsadsa', 'dasdas', 'dsadas', 41.67828430583841, 2.7804561010212345),
(16, 'asdsad', 'asdsadsa', 'dasdsa', 'dasd', 'asdsad', 41.67828430583841, 2.7804561010212345),
(17, 'Pere Pi', 'asssssssssssssssssssss', 'ssssssssssssssssssss', 'ssssssssssssssssss', 'ssssssssssssssss', 41.67798781441961, 2.7801650813431023);

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
  MODIFY `id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `grups`
--
ALTER TABLE `grups`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `proves`
--
ALTER TABLE `proves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
