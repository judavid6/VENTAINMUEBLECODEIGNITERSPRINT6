-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-04-2019 a las 00:50:34
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
-- Base de datos: `udi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(30) NOT NULL,
  `titulo_pro` varchar(150) NOT NULL,
  `caracteristicas_pro` varchar(1000) NOT NULL,
  `precio_pro` int(10) NOT NULL,
  `descripcion_pro` varchar(3000) NOT NULL,
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `titulo_pro`, `caracteristicas_pro`, `precio_pro`, `descripcion_pro`, `archivo`) VALUES
(1, 'arley steven', 'lache rueda', 1005181371, 'ing de sistemas', ''),
(2, 'shayner', 'laserna', 1002567458, 'ing electronica', ''),
(5, 'qw', 'qw', 12, 'qw', '505773.jpg'),
(6, 'dororo', 'es el mejor', 1000000, 'wifu', 'Dororo-TICGN.jpg'),
(11, 'a', 'a', 123, 'a', 'GI-plano-casa-de-campo-amplia.jpg'),
(12, 'qw', 'a', 12, 'qw', 'traje.png'),
(13, 'qw', 'a', 12, 'qw', ''),
(14, 'qw', 'qw', 12, 'qw', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `correo_electronico` varchar(100) NOT NULL,
  `celular` int(11) NOT NULL,
  `estatura` int(10) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `correo_electronico`, `celular`, `estatura`, `login`, `password`) VALUES
(1, 'arley steven', 'lache rueda', 'arleysteven1@hotmail.com', 123, 165, 'thelocus', 'c43240ccc094b865c92707d614bea3a2'),
(2, 'pedro', 'rosales', 'perosales@hotmail.com', 2147483647, 176, 'pedrorosales', 'd3ce9efea6244baa7bf718f12dd0c331');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
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
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
