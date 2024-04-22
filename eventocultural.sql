-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2019 a las 22:53:25
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eventocultural`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `idEvento` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `lugar` varchar(255) NOT NULL,
  `hora` time NOT NULL,
  `fecha` date NOT NULL,
  `contenido` varchar(2000) NOT NULL,
  `aforo` int(11) DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`idEvento`, `titulo`, `lugar`, `hora`, `fecha`, `contenido`, `aforo`, `precio`) VALUES
(1, 'Dia de la infancia', 'Plaza mayor', '16:30:00', '2019-12-11', 'Se realizaran actividades en la plaza para los niños pequeños', 200, '0.00'),
(2, 'Dia del anfeimer', 'Plaza de correos', '19:30:00', '2019-12-12', 'Se realizaran una serie de actividades en la plaza de correos para recaudar fondos contra el anfeimer.', 200, '0.00'),
(3, 'Videojuegos', 'Plaza Mayor', '16:30:00', '2019-12-13', 'Videojugos en la concejalia de joventud y tiempo libre.', 50, '0.00'),
(4, 'Cata de vinos', 'Bar Felipe', '18:00:00', '2019-12-14', 'Cata de vinos en el bar Felipe donde se serviran vinos de diferentes sitios', 50, '50.00'),
(5, 'Cata de quesos', 'Bar San José', '10:00:00', '2019-12-15', 'Cata de quesos de la zona en el bar San José.', 50, '41.00'),
(6, 'Cata de quesos', 'Bar San José', '18:00:00', '2019-12-17', 'Cata de quesos de la zona en el bar San José.', 50, '40.50'),
(7, 'Cata de vinos', 'Bar Felipe', '10:00:00', '2019-12-18', 'Cata de vinos en el bar Felipe donde se serviran vinos de diferentes sitios', 50, '50.00'),
(8, 'Comida para ayudar animales', 'Plaza Mayor', '13:30:00', '2019-12-16', 'Todo el dinero recogido por los platos de comida serán en beneficio de los animales de la protectora bienvenida.', 1000, '5.00'),
(9, 'Obra de teatro Marianela', 'Teatro Quijano', '18:00:00', '2019-12-19', 'La obra va sobre....', 200, '40.30'),
(10, 'Obra MariaRita', 'Teatro Quijano', '18:00:00', '2019-12-20', 'La obra va sobre ....', 200, '40.60');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `idreserva` int(11) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `importe` decimal(10,2) NOT NULL,
  `idEvento` int(11) NOT NULL,
  `nReserva` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`idreserva`, `correo`, `importe`, `idEvento`, `nReserva`) VALUES
(1, 'h@h.h', '0.00', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`idEvento`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`idreserva`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `idEvento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `idreserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
