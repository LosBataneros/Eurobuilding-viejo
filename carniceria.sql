-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2018 a las 19:37:42
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carniceria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id_articulo` int(11) NOT NULL,
  `descripcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id_articulo`, `descripcion`) VALUES
(1, 'jamon'),
(2, 'queso'),
(5, 'articulo'),
(6, 'Prueba'),
(7, 'sfdd'),
(8, 'jamon'),
(9, 'Carne'),
(10, 'Pechuga');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mudanza`
--

CREATE TABLE `mudanza` (
  `id_mudanza` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `origen` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `destino` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `articulo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(6) NOT NULL,
  `merma` int(6) NOT NULL,
  `costo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mudanza`
--

INSERT INTO `mudanza` (`id_mudanza`, `fecha`, `origen`, `destino`, `articulo`, `cantidad`, `merma`, `costo`) VALUES
(17, '2018-06-09', 'Almacén', 'Terraza', ' ', 12, 20, 15),
(18, '2018-06-01', 'Carnicería', 'Jardin Cristal', 'queso', 12, 20, 10),
(19, '2018-06-01', 'Carnicería', 'Room Service', 'queso', 85, 12, 16),
(20, '2018-06-01', 'Carniceria', 'Jardin cristal', 'queso', 25, 10, 15),
(22, '2018-07-12', 'Carniceria', 'Jardin cristal', 'queso', 25, 10, 89);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `mudanza`
--
ALTER TABLE `mudanza`
  ADD PRIMARY KEY (`id_mudanza`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `mudanza`
--
ALTER TABLE `mudanza`
  MODIFY `id_mudanza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
