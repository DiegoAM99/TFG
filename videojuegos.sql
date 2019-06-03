-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-01-2019 a las 18:34:53
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `videojuegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` varchar(115) COLLATE utf8_bin NOT NULL,
  `nombre_producto` varchar(245) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`) VALUES
('Insomniac', 'Marvel Spiderman');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` varchar(115) COLLATE utf8_bin NOT NULL,
  `Dirección` varchar(245) COLLATE utf8_bin NOT NULL,
  `Correo` varchar(115) COLLATE utf8_bin NOT NULL,
  `num_Contacto` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `Dirección`, `Correo`, `num_Contacto`) VALUES
('Fraxito0', 'C/Reinosa,14,Fuenlabrada,Madrid', 'fraxito0.prof@ufv.es', 61305645);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_producto`
--

CREATE TABLE `usuarios_producto` (
  `id_usuario` varchar(115) COLLATE utf8_bin NOT NULL,
  `producto_vendido` varchar(245) COLLATE utf8_bin NOT NULL,
  `producto_comprado` varchar(115) COLLATE utf8_bin NOT NULL,
  `precio_venta` int(115) NOT NULL,
  `nombre_producto`varchar(115) COLLATE utf8_bin NOT NULL,
  `id_producto` varchar(115) COLLATE utf8_bin NOT NULL,
  `precio_compra`varchar(115)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios_producto` (`id_usuario`, `producto_vendido`, `producto_comprado`, `precio_venta`, `nombre_producto`,`id_producto`,`precio_compra`) VALUES
('Fraxito', '1', '0', 20,'Marvel Spiderman','Insomniac','Nulo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuarios_producto`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
