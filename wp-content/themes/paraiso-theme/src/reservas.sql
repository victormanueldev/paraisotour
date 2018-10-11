-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2018 a las 05:53:32
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
-- Base de datos: `bd_sofit`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id_Reservas` int(10) NOT NULL,
  `sr_sra` varchar(8) CHARACTER SET utf8 DEFAULT NULL,
  `nombre_empresa` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `cel_tel` int(13) DEFAULT NULL,
  `email` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `tipo_Documento` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `cc_nit` int(20) DEFAULT NULL,
  `provincia` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `ciudad` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `direccion` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `fecha_Nacimiento` date DEFAULT NULL,
  `fecha_Viaje` varchar(20) DEFAULT NULL,
  `cantidad_may_cuatro` int(2) DEFAULT NULL,
  `cantidad_men_cuatro` int(2) DEFAULT NULL,
  `info_pasajeros` longtext CHARACTER SET utf8,
  `total_pasajeros` int(3) DEFAULT NULL,
  `cantidad_sillas` int(3) DEFAULT NULL,
  `total_a_pagar` int(10) DEFAULT NULL,
  `codigo_Referencia` int(10) DEFAULT NULL,
  `id_Destino` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id_Reservas`, `sr_sra`, `nombre_empresa`, `cel_tel`, `email`, `tipo_Documento`, `cc_nit`, `provincia`, `ciudad`, `direccion`, `fecha_Nacimiento`, `fecha_Viaje`, `cantidad_may_cuatro`, `cantidad_men_cuatro`, `info_pasajeros`, `total_pasajeros`, `cantidad_sillas`, `total_a_pagar`, `codigo_Referencia`, `id_Destino`) VALUES
(1, 'senor', 'Jorge Martinez', 1212, 'asdasd', 'pasaporte', 121212, 'amazonas', 'cali', 'edad23', '2018-09-02', '0000-00-00', 2, 2, 'fasdasdasdas', NULL, 3, 100000, 232323, 0),
(2, 'senor', 'Jorge Martinez', 1212, 'asdasd', 'pasaporte', 121212, 'amazonas', 'cali', 'edad23', '2018-09-02', '0000-00-00', 2, 2, 'fasdasdasdas', NULL, 3, 100000, 232323, 0),
(3, 'senor', 'Jorge Martinez', 1212, 'asdasd', 'pasaporte', 121212, 'amazonas', 'cali', 'edad23', '2018-09-02', '0000-00-00', 2, 2, 'fasdasdasdas', NULL, 3, 100000, 232323, 0),
(4, 'senor', 'martin', 321321, 'thesupergeorge17@hotmail.com', 'cedula', 3424324, 'valle', 'cali', 'sfsdfdsew', '2018-09-10', '0000-00-00', 4, 3, 'rdfjghjfgf', NULL, 4, 455555, 654656, 0),
(5, 'senor', 'martin', 321321, 'thesupergeorge17@hotmail.com', 'cedula', 3424324, 'valle', 'cali', 'sfsdfdsew', '2018-09-10', '0000-00-00', 4, 3, 'rdfjghjfgf', NULL, 4, 455555, 654656, 0),
(6, 'senora', 'sandra', 21425, 'sgff', 'cedula', 645546, 'valle', 'cali', 'fghfg', '2018-09-11', '0000-00-00', 6, 7, 'teertretret', NULL, 645, 87877, 546546, 0),
(7, 'senor', 'Victor', 2343243, 'sdfsdfsd', 'pasaporte', 2352325, 'amazonas', 'leticia', 'sdfsdfsd', '2018-09-27', 'oct', 4, 7, 'gsfgsgdfgdfgd', NULL, 32, 3444444, 5454545, 0),
(8, 'senora', '', 433243, 'ererewr', 'pasaporte', 2354543, 'valle', 'cali', 'sdfsdfds', '2018-09-14', 'nov', 5, 3, 'sdfsdfsdfsd', NULL, 3434, 34454545, 5454545, 0),
(9, 'senora', 'Lorena', 433243, 'ererewr', 'pasaporte', 2354543, 'valle', 'cali', 'sdfsdfds', '2018-09-14', 'nov', 5, 3, 'sdfsdfsdfsd', NULL, 3434, 34454545, 5454545, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id_Reservas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id_Reservas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
