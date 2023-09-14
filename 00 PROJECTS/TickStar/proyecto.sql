-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2018 a las 10:48:54
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boletos`
--

CREATE TABLE `boletos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `imagen` varchar(30) NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `boletos`
--

INSERT INTO `boletos` (`id`, `nombre`, `imagen`, `precio`) VALUES
(1, 'Regular', 'regular.jpg', 1),
(2, 'VIP', 'vip.jpg', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `lugar` varchar(30) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `hora` varchar(30) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `estatus` varchar(30) NOT NULL DEFAULT 'alta'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `descripcion`, `lugar`, `fecha`, `hora`, `imagen`, `estatus`) VALUES
(1, 'Alan Walker en concierto', 'Estadio TickStar Tijuana', 'Agosto 18', '9:00 PM', 'AW.jpg', 'alta'),
(4, 'Maluma en concierto', 'Estadio TickStar', 'Agosto 10', '10:00 PM', 'Maluma.png', 'alta'),
(5, 'Bruno Mars', 'Estadio TickStar', 'AGOSTO 8', '8:00 PM', 'Bruno.png', 'baja'),
(9, 'vicente fernandez', 'tijuana', 'Agosto 18', '10:00 pm', 'Cris.jpg', 'baja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`, `foto`) VALUES
(14, 'admin', 'admin', 'admin', 'admin', 'default.png'),
(16, 'Raul', 'Blanco', 'que', '123', 'default.png'),
(18, 'Raul', 'Blanco', 'tick', '123', 'imagenes/18.jpg'),
(19, 'Jeferson', 'Gutierritoz', 'esteesmicorreogg@gmail.com', 'lagris', 'default.png'),
(20, 'Rivera', 's', 'Rivera', '123', 'imagenes/20.jpg'),
(22, 'Elisa ', 'Portugal Ponce', 'elisaopnce0114@gmail.com', 'reshidam', 'default.png'),
(23, 'Cristopher', 'MartÃ­nez', 'xd', 'xd', 'imagenes/23.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `boletos`
--
ALTER TABLE `boletos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `boletos`
--
ALTER TABLE `boletos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
