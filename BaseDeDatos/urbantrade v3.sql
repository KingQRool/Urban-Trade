-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2022 a las 23:20:01
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `urbantrade`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_publicaciones`
--

CREATE TABLE `tbl_publicaciones` (
  `id_p` int(11) NOT NULL,
  `nombre_p` varchar(50) DEFAULT NULL,
  `info_p` varchar(250) DEFAULT NULL,
  `fotos_p` blob DEFAULT NULL,
  `fotos_p_url` varchar(250) DEFAULT NULL,
  `precios_p` double DEFAULT NULL,
  `id_u` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_publicaciones`
--

INSERT INTO `tbl_publicaciones` (`id_p`, `nombre_p`, `info_p`, `fotos_p`, `fotos_p_url`, `precios_p`, `id_u`) VALUES
(3, 'Edider', 'pro en php', 0x706172616d696775652e6a7067, '../Views/Publicaciones/Imagenes/paramigue.jpg', 20000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_sugerencias`
--

CREATE TABLE `tbl_sugerencias` (
  `id_s` int(11) NOT NULL,
  `nombre_s` varchar(50) DEFAULT NULL,
  `mensaje_s` varchar(250) DEFAULT NULL,
  `id_u` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_sugerencias`
--

INSERT INTO `tbl_sugerencias` (`id_s`, `nombre_s`, `mensaje_s`, `id_u`) VALUES
(1, 'aaaaaa', 'aaaaaaaaaaaaa', 1),
(2, 'manueñ', 'css debe mejorar', 1),
(3, 'migue', 'css debe mejorar', 1),
(4, 'migue', 'debe mejorar la velocidad', 1),
(5, 'migue', 'debe mejorar la velocidad', 1),
(6, 'migue', 'deben poner animacion de carga', 1),
(7, 'migue', 'deben poner animacion de carga', 1),
(8, 'migue', 'aaaaaaaaaaa', 1),
(9, 'migue', 'aaaaaaaaaaa', 1),
(10, 'migue', 'aaaaaaaaaaa', 1),
(11, 'edier m', 'mejoren el registro', 5),
(12, 'edier m', 'mejoren el responsive', 5),
(13, 'migue1', 'aaaaaaaaaaaa', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios_registrados`
--

CREATE TABLE `tbl_usuarios_registrados` (
  `id_u` int(11) NOT NULL,
  `correo_u` varchar(90) DEFAULT NULL,
  `nombre_u` varchar(50) DEFAULT NULL,
  `centro_u` varchar(50) DEFAULT NULL,
  `contrasena_u` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuarios_registrados`
--

INSERT INTO `tbl_usuarios_registrados` (`id_u`, `correo_u`, `nombre_u`, `centro_u`, `contrasena_u`) VALUES
(1, 'migue@gmail.com1', 'migue1', 'ctgi1', '$2y$10$dRuAJhc6MXKRI8r4ZA3jgOMnDGlS7c5pZ.g7TGZJG8hdpQIbeXkmq'),
(5, 'edier@gmail.com', 'edier m', 'ctgi', '$2y$10$YC3Y1Gg8lF2g4saHCnT49uFnMtihwoL3AdvZIq.UTwATOkhxXGn0O');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_publicaciones`
--
ALTER TABLE `tbl_publicaciones`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `id_u` (`id_u`);

--
-- Indices de la tabla `tbl_sugerencias`
--
ALTER TABLE `tbl_sugerencias`
  ADD PRIMARY KEY (`id_s`),
  ADD KEY `id_u` (`id_u`);

--
-- Indices de la tabla `tbl_usuarios_registrados`
--
ALTER TABLE `tbl_usuarios_registrados`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_publicaciones`
--
ALTER TABLE `tbl_publicaciones`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_sugerencias`
--
ALTER TABLE `tbl_sugerencias`
  MODIFY `id_s` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios_registrados`
--
ALTER TABLE `tbl_usuarios_registrados`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_publicaciones`
--
ALTER TABLE `tbl_publicaciones`
  ADD CONSTRAINT `tbl_publicaciones_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `tbl_usuarios_registrados` (`id_u`);

--
-- Filtros para la tabla `tbl_sugerencias`
--
ALTER TABLE `tbl_sugerencias`
  ADD CONSTRAINT `tbl_sugerencias_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `tbl_usuarios_registrados` (`id_u`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
