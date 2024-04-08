-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-04-2024 a las 16:57:17
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
(1, 118, 'Eric', 'DAW 2', 'DAW 2', 1),
(2, 117, 'Adrián', 'DAW 1', 'DAW 1', 0),
(3, NULL, 'Pere', 'DAW 2', '', 0),
(4, 118, 'Marta', 'DAW 2', 'DAW 2', 1),
(5, 118, 'Alex', 'DAW 2', 'DAW 2', 1),
(6, NULL, 'Raul', 'DAW 2', '', 0),
(7, NULL, 'Dani', 'DAW 2', '', 0),
(8, NULL, 'Biel', 'DAW 2', '', 0),
(9, NULL, 'Benito', 'DAW 1', '', 0),
(10, NULL, 'Maria', 'DAW 1', '', 0),
(11, 117, 'Aina', 'DAW 1', 'DAW 1', 0),
(12, 117, 'Sergi', 'DAW 1', 'DAW 1', 1),
(13, 117, 'Dani', 'DAW 1', 'DAW 1', 1),
(14, 120, 'Paco', 'SMX1B', 'SMX1B', 1),
(15, 120, 'Juan', 'SMX1B', 'SMX1B', 1),
(16, 120, 'Maria', 'SMX1B', 'SMX1B', 1),
(17, 120, 'Andrea', 'SMX1B', 'SMX1B', 1),
(18, 120, 'Alberto', 'SMX1B', 'SMX1B', 1),
(19, 119, 'Paco', 'SMX1A', 'SMX1A', 1),
(20, 119, 'Juan', 'SMX1A', 'SMX1A', 1),
(21, 119, 'Maria', 'SMX1A', 'SMX1A', 1),
(22, 119, 'Andrea', 'SMX1A', 'SMX1A', 1),
(23, 119, 'Alberto', 'SMX1A', 'SMX1A', 1),
(24, 121, 'Paco', 'SMX2A', 'SMX2A', 1),
(25, 121, 'Juan', 'SMX2A', 'SMX2A', 1),
(26, 121, 'Maria', 'SMX2A', 'SMX2A', 1),
(27, 121, 'Andrea', 'SMX2A', 'SMX2A', 1),
(28, 121, 'Alberto', 'SMX2A', 'SMX2A', 1),
(29, 122, 'Paco', 'SMX2B', 'SMX2B', 1),
(30, 122, 'Juan', 'SMX2B', 'SMX2B', 1),
(31, 122, 'Maria', 'SMX2B', 'SMX2B', 1),
(32, 122, 'Andrea', 'SMX2B', 'SMX2B', 1),
(33, 118, 'Alberto', 'SMX2B', 'DAW 2', 1),
(34, 115, 'Paco', 'ASIX 1', 'ASIX 1', 0),
(35, 115, 'Juan', 'ASIX 1', 'ASIX 1', 0),
(36, 115, 'Maria', 'ASIX 1', 'ASIX 1', 1),
(37, 115, 'Andrea', 'ASIX 1', 'ASIX 1', 1),
(38, 115, 'Alberto', 'ASIX 1', 'ASIX 1', 1),
(39, 116, 'Paco', 'ASIX 2', 'ASIX 2', 1),
(40, 116, 'Juan', 'ASIX 2', 'ASIX 2', 1),
(41, 116, 'Maria', 'ASIX 2', 'ASIX 2', 1),
(42, 116, 'Andrea', 'ASIX 2', 'ASIX 2', 1),
(43, 116, 'Alberto', 'ASIX 2', 'ASIX 2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grups`
--

CREATE TABLE `grups` (
  `id` int(100) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `victories` int(11) DEFAULT 0,
  `imatge` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grups`
--

INSERT INTO `grups` (`id`, `nom`, `victories`, `imatge`) VALUES
(115, 'ASIX 1', 0, '../imatges/DP Section 10.png'),
(116, 'ASIX 2', 0, '../imatges/rights & responsibilities related to risk prevention.png'),
(117, 'DAW 1', 0, ''),
(118, 'DAW 2', 1, ''),
(119, 'SMX1A', 0, ''),
(120, 'SMX1B', 0, ''),
(121, 'SMX2A', 0, ''),
(122, 'SMX2B', 0, '');

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
(20, 'Adivina la cançó', 'asdasdsa', 'Aula ASIX1', 'Alex', 'Res', 41.678451464274865, 2.7804312900210837),
(26, 'futbol', 'sadddddddddd', 'Primera Pista', 'Cata', 'Pilota', 41.678246973912245, 2.7803580720763765),
(27, 'La corda', 'sssssssss', 'Davant de la cantina', 'Jose', 'Corda', 41.67864977680978, 2.7804815820068596),
(28, 'Futbolin', 'ddddddddddd', 'Mural', 'Isaac', 'futbolin', 41.67847695746185, 2.7807632139534233);

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
  MODIFY `id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT de la tabla `grups`
--
ALTER TABLE `grups`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT de la tabla `proves`
--
ALTER TABLE `proves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
