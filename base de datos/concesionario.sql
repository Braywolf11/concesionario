-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2019 a las 08:10:28
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `concesionario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_bin NOT NULL,
  `photo` varchar(50) COLLATE utf8_bin NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(15) COLLATE utf8_bin NOT NULL,
  `Apellido` varchar(15) COLLATE utf8_bin NOT NULL,
  `Username_perfil` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `perfil` int(1) NOT NULL,
  `fecha_ingre` varchar(15) COLLATE utf8_bin NOT NULL,
  `password` varchar(15) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `Nombre`, `Apellido`, `Username_perfil`, `email`, `perfil`, `fecha_ingre`, `password`) VALUES
(1, 'Brayan', 'Rivera', 'Braywolf11', 'brayfer1893@gmail.com', 1, '12/11/2011', '101010'),
(2, 'Fernanda', 'Salas', 'salitas', 'fernandas@motor.co', 2, '12/11/1920', '123456'),
(3, 'Carlos', 'Puerres', 'carlitos21', 'cali1212@gmail.com', 3, '12/05/1984', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id` int(11) NOT NULL,
  `marca` varchar(20) COLLATE utf8_bin NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_bin NOT NULL,
  `modelo` varchar(5) COLLATE utf8_bin NOT NULL,
  `color` varchar(11) COLLATE utf8_bin NOT NULL,
  `precio` int(11) NOT NULL,
  `photo` varchar(50) COLLATE utf8_bin NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `marca`, `Nombre`, `modelo`, `color`, `precio`, `photo`, `estado`) VALUES
(1, 'lamborghini', 'veneno', '2019', 'azul/gris', 659000000, '', 1),
(2, 'lamborghini', 'aventador', '2019', 'rojo', 520000000, '', 1),
(3, 'Lamborghini', 'Aventador', '2019', 'Rojo/Lila', 220000000, '/concesionario/vehiculos/', 0),
(4, 'lamborghini', 'murcielago', '2019', 'blanco', 360000000, '', 1),
(6, 'bmw', 'BMW', '2019', 'Rojo', 459000000, '/concesionario/vehiculos/', 0),
(8, 'bmw', 'BMW M240i Coupé', '2019', 'rojo', 262000000, '', 1),
(9, 'bmw', 'BMW M240i Coupé', '2019', 'negro', 259000000, '', 1),
(10, 'bmw', 'BMW M240i Convertibl', '2019', 'azul/lila', 359000000, '', 1),
(11, 'bmw', 'BMW M240i Convertibl', '2019', 'verde', 364000000, '', 1),
(12, 'bmw', 'BMW M135i x Drive', '2019', 'rojo/gris', 659000000, '', 1),
(13, 'bmw', 'BMW Serie 2 Active T', '2019', 'negro', 459000000, '', 1),
(14, 'bmw', 'BMW Serie 2 Active T', '2019', 'verde/negro', 159000000, '', 1),
(15, 'bmw', 'BMW Serie 2 Active T', '2019', 'rojo', 169000000, '', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
