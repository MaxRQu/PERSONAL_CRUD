-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2023 a las 18:25:36
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_producto`
--

CREATE TABLE `tm_producto` (
  `prod_id` int(11) NOT NULL,
  `prod_nom` varchar(150) NOT NULL,
  `prod_desc` varchar(500) NOT NULL,
  `fech_crea` datetime NOT NULL,
  `fech_modi` datetime DEFAULT NULL,
  `fech_elim` datetime DEFAULT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_producto`
--

INSERT INTO `tm_producto` (`prod_id`, `prod_nom`, `prod_desc`, `fech_crea`, `fech_modi`, `fech_elim`, `est`) VALUES
(1, 'Auriculares', 'Ninguno', '2023-11-28 13:36:46', NULL, '2023-12-02 15:34:19', 0),
(2, 'Monitor', 'Ninguno', '2023-11-28 13:39:49', NULL, '2023-12-02 15:52:49', 0),
(3, 'Teclado', 'Ninguno', '2023-11-28 13:40:42', NULL, '2023-11-30 10:19:20', 0),
(4, 'Mouse', 'Ninguno', '2023-11-30 10:18:09', NULL, NULL, 1),
(5, 'Tecladito', 'Ninguno', '2023-12-02 15:07:59', NULL, '2023-12-02 15:26:26', 0),
(6, 'Microfono', 'Ninguno', '2023-12-02 15:11:18', NULL, '2023-12-02 15:36:35', 0),
(7, 'Parlante', 'Ninguno', '2023-12-02 15:11:37', NULL, '2023-12-02 15:26:47', 0),
(8, 'Max', 'Ninguno', '2023-12-02 15:23:52', NULL, '2023-12-02 15:25:38', 0),
(9, 'ddd', 'Ninguno', '2023-12-02 15:24:24', NULL, '2023-12-02 15:25:26', 0),
(10, 'aaa', 'Ninguno', '2023-12-02 15:24:54', NULL, '2023-12-02 15:25:18', 0),
(11, 'ooooo', 'Ninguno', '2023-12-02 15:25:10', NULL, '2023-12-02 15:25:31', 0),
(12, 'rgrgrwegw', 'Ninguno', '2023-12-02 15:32:47', NULL, '2023-12-02 15:32:56', 0),
(13, 'rtehrtehrthrth', 'Ninguno', '2023-12-02 15:33:02', NULL, '2023-12-02 15:33:10', 0),
(14, 'Tecladito', 'Ninguno', '2023-12-02 15:34:34', NULL, '2023-12-02 15:36:28', 0),
(15, 'Teclado', 'Ninguno', '2023-12-02 15:36:53', NULL, '2023-12-02 15:36:56', 0),
(16, 'Teclado', 'Ninguno', '2023-12-02 15:39:04', NULL, '2023-12-02 15:52:45', 0),
(17, 'Parlante', 'Ninguno', '2023-12-02 15:39:11', NULL, '2023-12-02 15:51:59', 0),
(18, 'fff', 'Ninguno', '2023-12-02 15:39:16', NULL, '2023-12-02 15:39:28', 0),
(19, 'Teclado', 'Ninguno', '2023-12-02 16:02:44', NULL, NULL, 1),
(20, 'ddd', 'Ninguno', '2023-12-02 16:02:51', NULL, '2023-12-02 16:02:57', 0),
(21, 'fff', 'Ninguno', '2023-12-02 16:02:55', NULL, '2023-12-02 16:02:59', 0),
(22, 'ppppppppp41111', 'Ninguno', '2023-12-04 19:08:53', '2023-12-04 19:30:19', '2023-12-04 19:30:28', 0),
(23, 'Tecladito', 'Ninguno', '2023-12-04 19:30:24', NULL, NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tm_producto`
--
ALTER TABLE `tm_producto`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tm_producto`
--
ALTER TABLE `tm_producto`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
