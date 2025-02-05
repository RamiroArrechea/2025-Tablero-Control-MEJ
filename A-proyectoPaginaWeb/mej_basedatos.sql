-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-01-2025 a las 01:42:42
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mej_basedatos`
--
CREATE DATABASE IF NOT EXISTS `mej_basedatos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mej_basedatos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidad`
--

CREATE TABLE `comunidad` (
  `comunidad_id` int(11) NOT NULL,
  `comunidad_nombre` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `espacio`
--

CREATE TABLE `espacio` (
  `espacio_id` int(11) NOT NULL,
  `espacio_nombre` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `espacio`
--

INSERT INTO `espacio` (`espacio_id`, `espacio_nombre`) VALUES
(1, 'PRE ADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapa`
--

CREATE TABLE `etapa` (
  `etapa_id` int(11) NOT NULL,
  `etapa_nombre` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `etapa`
--

INSERT INTO `etapa` (`etapa_id`, `etapa_nombre`) VALUES
(1, 'TIERRA BUENA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mejinos`
--

CREATE TABLE `mejinos` (
  `mejinos_id` int(100) NOT NULL,
  `mejinos_apellido` varchar(256) NOT NULL,
  `mejinos_nombre` varchar(256) NOT NULL,
  `mejinos_fechaNac` date NOT NULL,
  `mejinos_etapa` int(11) NOT NULL,
  `mejinos_comunidad` int(11) NOT NULL,
  `mejinos_sacramento` int(11) NOT NULL,
  `mejinos_desicion` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mejinos`
--

INSERT INTO `mejinos` (`mejinos_id`, `mejinos_apellido`, `mejinos_nombre`, `mejinos_fechaNac`, `mejinos_etapa`, `mejinos_comunidad`, `mejinos_sacramento`, `mejinos_desicion`) VALUES
(1, 'APELLIDO', 'NOMBRE', '1984-05-01', 1, 1, 1, 1),
(2, '', 'RAMITO', '2025-01-16', 1, 1, 1, 0),
(3, 'ARRE', 'ERRAR', '2025-01-01', 1, 1, 1, 1),
(4, 'PEPE3', 'ALONSO3', '2024-12-06', 6, 2, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sacramento`
--

CREATE TABLE `sacramento` (
  `sacramento_id` int(11) NOT NULL,
  `sacramento_nombre` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comunidad`
--
ALTER TABLE `comunidad`
  ADD PRIMARY KEY (`comunidad_id`);

--
-- Indices de la tabla `espacio`
--
ALTER TABLE `espacio`
  ADD PRIMARY KEY (`espacio_id`);

--
-- Indices de la tabla `etapa`
--
ALTER TABLE `etapa`
  ADD PRIMARY KEY (`etapa_id`);

--
-- Indices de la tabla `mejinos`
--
ALTER TABLE `mejinos`
  ADD PRIMARY KEY (`mejinos_id`),
  ADD KEY `mejinos_etapa` (`mejinos_etapa`),
  ADD KEY `mejinos_comunidad` (`mejinos_comunidad`),
  ADD KEY `mejinos_sacramento` (`mejinos_sacramento`);

--
-- Indices de la tabla `sacramento`
--
ALTER TABLE `sacramento`
  ADD PRIMARY KEY (`sacramento_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comunidad`
--
ALTER TABLE `comunidad`
  MODIFY `comunidad_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `espacio`
--
ALTER TABLE `espacio`
  MODIFY `espacio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `etapa`
--
ALTER TABLE `etapa`
  MODIFY `etapa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mejinos`
--
ALTER TABLE `mejinos`
  MODIFY `mejinos_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `sacramento`
--
ALTER TABLE `sacramento`
  MODIFY `sacramento_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
