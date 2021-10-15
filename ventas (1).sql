-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2019 a las 00:53:30
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

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
(9, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `titulo_pro` varchar(100) NOT NULL,
  `caracteristicas_pro` text NOT NULL,
  `precio_pro` varchar(15) NOT NULL,
  `descripcion_pro` text NOT NULL,
  `ubicacion_pro` varchar(50) NOT NULL,
  `estado_pro` varchar(20) NOT NULL,
  `archivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `id_usuario`, `titulo_pro`, `caracteristicas_pro`, `precio_pro`, `descripcion_pro`, `ubicacion_pro`, `estado_pro`, `archivo`) VALUES
(1, 2, 'CASA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer iaculis aliquet egestas. Aliquam sit amet aliquet velit. Nulla facilisi. Sed iaculis justo vel lacus egestas malesuada. Etiam pharetra urna quis feugiat dapibus. Sed ut nisl eu neque auctor pellentesque. Mauris a porta nunc. Pellentesque vel est diam. Aenean aliquet enim vitae enim suscipit, ac vulputate nunc finibus.', '12000000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer iaculis aliquet egestas. Aliquam sit amet aliquet velit. Nulla facilisi. Sed iaculis justo vel lacus egestas malesuada. Etiam pharetra urna quis feugiat dapibus. Sed ut nisl eu neque auctor pellentesque. Mauris a porta nunc. Pellentesque vel est diam. Aenean aliquet enim vitae enim suscipit, ac vulputate nunc finibus.', 'TRASNVERSAL 54 DIAGONAL 12 CASA 3', 'en venta', 'casa_prefabricada11.jpg'),
(2, 3, 'CASA ELEVADA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer iaculis aliquet egestas. Aliquam sit amet aliquet velit. Nulla facilisi. Sed iaculis justo vel lacus egestas malesuada. Etiam pharetra urna quis feugiat dapibus. Sed ut nisl eu neque auctor pellentesque. Mauris a porta nunc. Pellentesque vel est diam. Aenean aliquet enim vitae enim suscipit, ac vulputate nunc finibus.', '12000000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer iaculis aliquet egestas. Aliquam sit amet aliquet velit. Nulla facilisi. Sed iaculis justo vel lacus egestas malesuada. Etiam pharetra urna quis feugiat dapibus. Sed ut nisl eu neque auctor pellentesque. Mauris a porta nunc. Pellentesque vel est diam. Aenean aliquet enim vitae enim suscipit, ac vulputate nunc finibus.', 'CARRERA 34D #42-09', 'en venta', 'Tinel_final-161.jpg'),
(3, 3, 'CASA MIRADOR', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer iaculis aliquet egestas. Aliquam sit amet aliquet velit. Nulla facilisi. Sed iaculis justo vel lacus egestas malesuada. Etiam pharetra urna quis feugiat dapibus. Sed ut nisl eu neque auctor pellentesque. Mauris a porta nunc. Pellentesque vel est diam. Aenean aliquet enim vitae enim suscipit, ac vulputate nunc finibus.\r\n\r\nQuisque magna turpis, iaculis eu purus et, posuere lobortis purus. Duis efficitur eget nibh ornare luctus. In eget tellus in risus pharetra imperdiet. Pellentesque augue dolor, congue id aliquet posuere, auctor quis nisl. Curabitur sit amet commodo arcu, sit amet egestas lectus. Suspendisse ipsum odio, pulvinar in consequat at, varius eget tortor. Donec in lectus sed ligula pellentesque imperdiet. Aenean tincidunt, nunc viverra euismod semper, nisi tellus elementum lorem, et hendrerit arcu nibh sed lectus. Nunc porta mauris vel velit porta mollis. Sed aliquet erat quis mattis sollicitudin. Ut dapibus euismod urna, id feugiat purus lobortis in. Integer interdum non nisi sit amet euismod. Aliquam scelerisque dignissim finibus. Mauris ultrices augue sapien, vitae vestibulum sem porta non. Nulla facilisi. Vivamus et ipsum diam.', '12000000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer iaculis aliquet egestas. Aliquam sit amet aliquet velit. Nulla facilisi. Sed iaculis justo vel lacus egestas malesuada. Etiam pharetra urna quis feugiat dapibus. Sed ut nisl eu neque auctor pellentesque. Mauris a porta nunc. Pellentesque vel est diam. Aenean aliquet enim vitae enim suscipit, ac vulputate nunc finibus.\r\n\r\nQuisque magna turpis, iaculis eu purus et, posuere lobortis purus. Duis efficitur eget nibh ornare luctus. In eget tellus in risus pharetra imperdiet. Pellentesque augue dolor, congue id aliquet posuere, auctor quis nisl. Curabitur sit amet commodo arcu, sit amet egestas lectus. Suspendisse ipsum odio, pulvinar in consequat at, varius eget tortor. Donec in lectus sed ligula pellentesque imperdiet. Aenean tincidunt, nunc viverra euismod semper, nisi tellus elementum lorem, et hendrerit arcu nibh sed lectus. Nunc porta mauris vel velit porta mollis. Sed aliquet erat quis mattis sollicitudin. Ut dapibus euismod urna, id feugiat purus lobortis in. Integer interdum non nisi sit amet euismod. Aliquam scelerisque dignissim finibus. Mauris ultrices augue sapien, vitae vestibulum sem porta non. Nulla facilisi. Vivamus et ipsum diam.', 'CARRERA 35A CALLE 53 #42-09', 'en venta', 'Casas_Mirador_3_011.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `correo_electronico` varchar(40) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `estatura` varchar(3) NOT NULL,
  `login` varchar(30) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `correo_electronico`, `celular`, `estatura`, `login`, `tipo`, `password`) VALUES
(1, 'arley steven', 'lache rueda', 'arleysteven@hotmail.com', '3132593349', '165', 'thelocus', 'admin', 'dGhlbG9jdXMxMjM='),
(2, 'pedro', 'rosales', 'pedro@gmail.com', '311568974', '170', 'pedro', 'usuario', 'cGVkcm8xMjM='),
(3, 'juan', 'perez', 'juan@gmail.com', '3125689710', '170', 'juan', 'usuario', 'anVhbjEyMw==');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `postulaciones`
--
ALTER TABLE `postulaciones`
  ADD PRIMARY KEY (`id_postulacion`),
  ADD KEY `id_producto` (`id_producto`,`id_usuario`),
  ADD KEY `Usuario` (`id_usuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_usuario_2` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

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
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `postulaciones`
--
ALTER TABLE `postulaciones`
  ADD CONSTRAINT `Producto` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `Usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
