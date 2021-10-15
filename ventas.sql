-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2019 a las 07:43:57
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulaciones`
--

CREATE TABLE `postulaciones` (
  `id_postulacion` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `postulaciones`
--

INSERT INTO `postulaciones` (`id_postulacion`, `id_producto`, `id_usuario`) VALUES
(4, 1, 3),
(8, 1, 4),
(2, 2, 2),
(9, 2, 4),
(3, 3, 2),
(7, 3, 4),
(5, 4, 2),
(6, 4, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `titulo_pro` varchar(200) DEFAULT NULL,
  `caracteristicas_pro` text,
  `precio_pro` float DEFAULT NULL,
  `descripcion_pro` text,
  `ubicacion_pro` varchar(200) NOT NULL,
  `estado_pro` varchar(50) NOT NULL,
  `archivo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `id_usuario`, `titulo_pro`, `caracteristicas_pro`, `precio_pro`, `descripcion_pro`, `ubicacion_pro`, `estado_pro`, `archivo`) VALUES
(1, 2, 'CASA MODERNA EN VENTA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sapien massa, euismod eget elementum sed, varius vel mauris. Donec blandit tempor nunc, finibus rutrum mi blandit sed. Proin pellentesque tortor mollis sollicitudin feugiat. Nunc et sem interdum, condimentum velit ac, congue sapien. Nam fermentum massa vitae tellus lobortis rhoncus. Etiam at turpis pellentesque, faucibus tellus at, egestas ipsum. Nam eu ipsum id neque posuere consequat. Nunc hendrerit odio eu faucibus vulputate. Aenean id venenatis turpis, vel porttitor lorem. Aenean interdum metus sit amet porta imperdiet.', 120000000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sapien massa, euismod eget elementum sed, varius vel mauris. Donec blandit tempor nunc, finibus rutrum mi blandit sed. Proin pellentesque tortor mollis sollicitudin feugiat. Nunc et sem interdum, condimentum velit ac, congue sapien. Nam fermentum massa vitae tellus lobortis rhoncus. Etiam at turpis pellentesque, faucibus tellus at, egestas ipsum. Nam eu ipsum id neque posuere consequat. Nunc hendrerit odio eu faucibus vulputate. Aenean id venenatis turpis, vel porttitor lorem. Aenean interdum metus sit amet porta imperdiet.', 'CARRERA 35 A CALLE 52 B ', 'en venta', 'casas-modernas-zx9811.jpg'),
(2, 3, 'CASA MIRADOR EN VENTA', '-1 BAÑO\r\n-2 HABITACIONES\r\n-SALA-COCINA\r\n', 90000000, 'CASA MIRADOR AMUEBLADA', 'TRANVERSAL 21 DIAGONAL 34D', 'en venta', 'Casas_Mirador_3_01.jpg'),
(3, 1, 'COLEGIO', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet erat in nunc suscipit fermentum sit amet at orci. Duis porta diam magna, et pulvinar nisi dictum et. Nunc eget erat placerat enim accumsan lacinia. Nunc in malesuada urna, et pulvinar sapien. Curabitur sagittis nisi tellus, non ullamcorper neque efficitur nec. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla id ligula lobortis, fringilla metus vitae, finibus eros. Nulla facilisi.', 123456, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet erat in nunc suscipit fermentum sit amet at orci. Duis porta diam magna, et pulvinar nisi dictum et. Nunc eget erat placerat enim accumsan lacinia. Nunc in malesuada urna, et pulvinar sapien. Curabitur sagittis nisi tellus, non ullamcorper neque efficitur nec. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla id ligula lobortis, fringilla metus vitae, finibus eros. Nulla facilisi.', 'CALLE 34D #45-09', 'en venta', '1204499_11.jpg'),
(4, 3, 'NIÑOS', 'Example explained: We use jQuery to loop through each table rows to check if there are any text values that matches the value of the input field. The toggle() method hides the row (display:none) that does not match the search. We use the toLowerCase() method to convert the text to lower case, which makes the search case insensitive (allows \"john\", \"John\", and even \"JOHN\" on search).', 1000000, 'Example explained: We use jQuery to loop through each table rows to check if there are any text values that matches the value of the input field. The toggle() method hides the row (display:none) that does not match the search. We use the toLowerCase() method to convert the text to lower case, which makes the search case insensitive (allows \"john\", \"John\", and even \"JOHN\" on search).', 'CALLE 54 # 45-54', 'en venta', 'gran-asociacion-menu-51.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(40) DEFAULT NULL,
  `apellidos` varchar(40) DEFAULT NULL,
  `correo_electronico` varchar(40) DEFAULT NULL,
  `celular` varchar(10) DEFAULT NULL,
  `estatura` varchar(3) DEFAULT NULL,
  `login` varchar(20) DEFAULT NULL,
  `tipo` varchar(8) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `correo_electronico`, `celular`, `estatura`, `login`, `tipo`, `password`) VALUES
(1, 'arley steven', 'lache rueda', 'arleysteven1@hotmail.com', '3132593349', '165', 'thelocus', 'admin', 'dGhlbG9jdXMxMjM='),
(2, 'giovanni andres', 'gil gil', 'itsbygio@gmail.com', '3188439508', '175', 'itsbygio', 'usuario', 'aXRzYnlnaW8xMjM='),
(3, 'miguel angel', 'ocampo chavarro', 'miguelocampo@hotmail.com', '3172132023', '175', 'miguelocampo', 'usuario', 'bWlndWVsb2NhbXBvMTIz'),
(4, 'edinson', 'lache', 'edinson@gmail.com', '3118231658', '162', 'edinson', 'usuario', 'ZWRpbnNvbjEyMw==');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `postulaciones`
--
ALTER TABLE `postulaciones`
  ADD PRIMARY KEY (`id_postulacion`),
  ADD KEY `id_producto` (`id_producto`,`id_usuario`),
  ADD KEY `Usuarios` (`id_usuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `Usuario` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `postulaciones`
--
ALTER TABLE `postulaciones`
  MODIFY `id_postulacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `postulaciones`
--
ALTER TABLE `postulaciones`
  ADD CONSTRAINT `Producto` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `Usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
