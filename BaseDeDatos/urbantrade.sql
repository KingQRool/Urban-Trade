-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2022 a las 23:50:57
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
-- Base de datos: `urbantrade`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `idt` int(11) NOT NULL,
  `nombret` varchar(150) NOT NULL,
  `precios` varchar(150) NOT NULL,
  `ubicaciont` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosr`
--

CREATE TABLE `usuariosr` (
  `idu` int(11) NOT NULL,
  `nombreu` varchar(150) NOT NULL,
  `emailu` varchar(150) NOT NULL,
  `contrasenau` varchar(250) NOT NULL,
  `centrou` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuariosr`
--

INSERT INTO `usuariosr` (`idu`, `nombreu`, `emailu`, `contrasenau`, `centrou`) VALUES
(5, 'Superman', 'santiagolp.slp@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$amVPUU1EWkxkNGhDRklnZw$AlRRdxS1BYighTHkWVET76TvDRmaGF+UYWuDsNF0/1w', 'CTGI'),
(6, 'Superman', 'santiagolp.slp@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$ZlJGZ3hjQ0ZZU21HV1F1dA$9u1N1rXZFUuYpqRK1na3qFBPWqLx0Cx6AkWPkjXOfX8', 'CTGI'),
(7, 'Superman', 'sleon578@soy.sena.edu.co', '$argon2id$v=19$m=65536,t=4,p=1$TUtLdjJ0dHNTa29NNlYvZA$HLKVjJHzfCbVdMSFr7BlBwgBz/979rt0OpT5jebQKdE', 'CTGI'),
(8, 'Miguel', 'sleon578@soy.sena.edu.co', '$argon2id$v=19$m=65536,t=4,p=1$UEEvbDRlQXVKOG1MNXI3UQ$lE7Yrd53PlGOW1m2K8z38+Py25WO6WurQq84cibkFlM', 'CTGI');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`idt`);

--
-- Indices de la tabla `usuariosr`
--
ALTER TABLE `usuariosr`
  ADD PRIMARY KEY (`idu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tienda`
--
ALTER TABLE `tienda`
  MODIFY `idt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuariosr`
--
ALTER TABLE `usuariosr`
  MODIFY `idu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
