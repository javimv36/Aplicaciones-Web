-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2017 a las 05:12:29
-- Versión del servidor: 5.5.40
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `traveltoplan`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra_excursiones`
--

CREATE TABLE IF NOT EXISTS `compra_excursiones` (
  `id` int(50) NOT NULL,
  `id_excursiones` int(50) NOT NULL,
  `id_usuarios` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra_vuelos`
--

CREATE TABLE IF NOT EXISTS `compra_vuelos` (
  `id` int(50) NOT NULL,
  `id_usuario` int(50) NOT NULL,
  `id_vuelos` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `excursiones`
--

CREATE TABLE IF NOT EXISTS `excursiones` (
  `ID_EX` int(50) NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(50) NOT NULL,
  `plazas` int(100) NOT NULL,
  `descripcion` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `categoria` enum('monumento','naturaleza','museo','nocturno','deporte','espectaculos') CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `duracion` int(11) NOT NULL,
  `id_user_ex` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `excursiones`
--

INSERT INTO `excursiones` (`ID_EX`, `nombre`, `ciudad`, `pais`, `precio`, `plazas`, `descripcion`, `start`, `end`, `categoria`, `duracion`, `id_user_ex`) VALUES
(13, 'Bus rojo', 'Madrid', 'Spain', 10, 20, 'Coges el bus y lo coges y luego lo coges', '2017-04-19 09:00:00', NULL, 'nocturno', 12, 1),
(14, 'Paseo por el Parque', 'Madrid', 'Spain', 14, 41, 'Paseo por el parque del Retiro de Madrid', '2017-04-25 14:00:00', NULL, 'naturaleza', 12, 2),
(45, 'Visita al museo ARCO', 'Madrid', 'Spain', 41, 14, 'Visita guiada por el Museo de Arte Contemporaneo.', '2017-04-30 00:00:00', NULL, 'museo', 24, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID_US` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `dni` varchar(9) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `sexo` enum('masculino','femenino') CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `rol` enum('admin','gestor','registrado') CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_US`, `username`, `nombre`, `apellidos`, `dni`, `email`, `sexo`, `password`, `rol`) VALUES
(1, 'admin', 'juan', 'alvarez', '45872365D', 'juan@a.com', 'masculino', 'juan', 'admin'),
(2, 'paco07', 'francisco', 'pineda', '45965877L', 'paco@a.com', 'masculino', 'paco', 'registrado'),
(3, 'lorena_74', 'lorena', 'garcia', '54289655I', 'lorena@a.com', 'femenino', 'lorena', 'gestor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelos`
--

CREATE TABLE IF NOT EXISTS `vuelos` (
  `ID_VU` int(50) NOT NULL,
  `origen` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `destino` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora_salida` time NOT NULL,
  `hora_llegada` time NOT NULL,
  `plazas` int(100) NOT NULL,
  `escala` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tiempo_escala` time NOT NULL,
  `precio` int(20) NOT NULL,
  `compañia` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_user_vu` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compra_excursiones`
--
ALTER TABLE `compra_excursiones`
 ADD PRIMARY KEY (`id`), ADD KEY `id_usuarios` (`id_usuarios`), ADD KEY `id_usuarios_2` (`id_usuarios`), ADD KEY `id_excursiones` (`id_excursiones`);

--
-- Indices de la tabla `compra_vuelos`
--
ALTER TABLE `compra_vuelos`
 ADD PRIMARY KEY (`id`), ADD KEY `id_usuario` (`id_usuario`), ADD KEY `id_vuelos` (`id_vuelos`);

--
-- Indices de la tabla `excursiones`
--
ALTER TABLE `excursiones`
 ADD PRIMARY KEY (`ID_EX`), ADD KEY `nombre` (`nombre`,`ciudad`,`pais`,`categoria`), ADD KEY `ID_EX` (`ID_EX`), ADD KEY `id_user_ex` (`id_user_ex`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`ID_US`), ADD KEY `nombre` (`nombre`,`dni`,`email`,`sexo`,`rol`), ADD KEY `username` (`username`);

--
-- Indices de la tabla `vuelos`
--
ALTER TABLE `vuelos`
 ADD PRIMARY KEY (`ID_VU`), ADD KEY `origen` (`origen`,`destino`,`compañia`), ADD KEY `id_user_vu` (`id_user_vu`), ADD KEY `id_user_vu_2` (`id_user_vu`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra_excursiones`
--
ALTER TABLE `compra_excursiones`
ADD CONSTRAINT `compra_excursiones_ibfk_1` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`ID_US`) ON UPDATE CASCADE,
ADD CONSTRAINT `compra_excursiones_ibfk_2` FOREIGN KEY (`id_excursiones`) REFERENCES `excursiones` (`ID_EX`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `compra_vuelos`
--
ALTER TABLE `compra_vuelos`
ADD CONSTRAINT `compra_vuelos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`ID_US`) ON UPDATE CASCADE,
ADD CONSTRAINT `compra_vuelos_ibfk_2` FOREIGN KEY (`id_vuelos`) REFERENCES `vuelos` (`ID_VU`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `excursiones`
--
ALTER TABLE `excursiones`
ADD CONSTRAINT `excursiones_ibfk_1` FOREIGN KEY (`id_user_ex`) REFERENCES `usuarios` (`ID_US`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `vuelos`
--
ALTER TABLE `vuelos`
ADD CONSTRAINT `vuelos_ibfk_1` FOREIGN KEY (`id_user_vu`) REFERENCES `usuarios` (`ID_US`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
