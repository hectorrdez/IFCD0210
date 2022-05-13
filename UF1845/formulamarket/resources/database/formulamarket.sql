-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2022 a las 20:42:20
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulamarket`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log`
--

CREATE TABLE `log` (
  `time` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `name` varchar(20) NOT NULL,
  `pass` varchar(40) DEFAULT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `log`
--

INSERT INTO `log` (`time`, `name`, `pass`, `type`) VALUES
('2022-05-13 16:18:26', 'hectorrdez', '09379231c307c1bff583b184a157ae61d7f00bac', 'register'),
('2022-05-13 16:36:19', 'fasdfasd', '3da541559918a808c2402bba5012f6c60b27661c', 'register'),
('2022-05-13 16:56:35', 'hectorrdez', '09379231c307c1bff583b184a157ae61d7f00bac', 'login-success'),
('2022-05-13 17:01:52', 'hectorrdez', 'null', 'logout'),
('2022-05-13 17:02:01', 'hectorrdez', '09379231c307c1bff583b184a157ae61d7f00bac', 'login-success'),
('2022-05-13 17:02:07', 'hectorrdez', 'null', 'logout'),
('2022-05-13 17:02:43', 'hectorrdez', '09379231c307c1bff583b184a157ae61d7f00bac', 'login-success'),
('2022-05-13 17:02:48', 'hectorrdez', 'null', 'logout'),
('2022-05-13 17:45:32', 'hectorrdez', '09379231c307c1bff583b184a157ae61d7f00bac', 'login-success'),
('2022-05-13 17:45:38', 'hectorrdez', NULL, 'logout'),
('2022-05-13 18:03:42', 'hectorrdez', '09379231c307c1bff583b184a157ae61d7f00bac', 'login-success'),
('2022-05-13 19:05:40', 'hectorrdez', NULL, 'logout'),
('2022-05-13 19:08:43', 'hectorrdez', '09379231c307c1bff583b184a157ae61d7f00bac', 'login-success'),
('2022-05-13 19:53:41', 'hectorrdez', NULL, 'logout'),
('2022-05-13 19:55:44', 'hectorrdez', '09379231c307c1bff583b184a157ae61d7f00bac', 'login-success'),
('2022-05-13 20:16:29', 'hectorrdez', NULL, 'logout'),
('2022-05-13 20:16:55', 'hectorrdez', '09379231c307c1bff583b184a157ae61d7f00bac', 'login-success');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `img` varchar(40) DEFAULT NULL,
  `year` int(10) DEFAULT NULL,
  `team` varchar(20) DEFAULT NULL,
  `power` int(20) DEFAULT NULL,
  `weight` int(5) DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  `offer` int(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `name`, `img`, `year`, `team`, `power`, `weight`, `price`, `offer`, `type`) VALUES
(1, 'F1-75', 'Ferrari1', 2022, 'Ferrari', 1000, 780, 140000000, NULL, 'modern'),
(2, 'w13', 'mercedes', 2022, 'Mercedes', 980, 797, 140000000, NULL, 'modern'),
(3, 'amr-22', 'astonmartin', 2022, 'Aston Martin', 980, 797, 14000000, NULL, 'modern'),
(4, 'mcl-36', 'mclaren', 2022, 'McLaren', 980, 798, 140000000, NULL, 'modern'),
(5, 'a-522', 'alpine', 2022, 'Alpine Renault', 980, 798, 140000000, NULL, 'modern'),
(6, 'rb-18', 'redbull', 2022, 'RedBull', 1060, 795, 140000000, NULL, 'modern'),
(7, 'bgp-001', 'BrawnGP', 2009, 'Brawn GP', 800, 650, 2000000, NULL, 'classic'),
(8, 'f-312t', 'Ferrari_312T', 1975, 'Ferrari', 500, 450, 4000000, NULL, 'classic'),
(9, 'lt-76d', 'lotus-72d', 1970, 'Lotus', 440, 550, 2500000, NULL, 'classic'),
(10, 'r-26', 'renault-r26', 2006, 'Renault', 1000, 650, 20000000, NULL, 'classic'),
(11, 'mcl-mp4/4', 'McLaren-MP4', 1988, 'McLaren', 1350, 540, 5000000, NULL, 'classic'),
(12, 'f-2004', 'ferrari-f2004', 2004, 'Ferrari', 900, 605, 15000000, NULL, 'classic');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telf` int(9) NOT NULL,
  `address` varchar(40) NOT NULL,
  `cp` int(5) NOT NULL,
  `provincia` varchar(40) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `pass`, `email`, `telf`, `address`, `cp`, `provincia`, `role`) VALUES
(1, 'hectorrdez', '09379231c307c1bff583b184a157ae61d7f00bac', 'hectorrdez@gmail.com', 2147483647, 'Virgen de las virtudes nº 30 Bajo', 3009, 'Alicante', 'user'),
(2, 'fasdfasd', '3da541559918a808c2402bba5012f6c60b27661c', 'hectorrdez@hotmail.com', 2147483647, 'Virgen de las virtudes nº 30 Bajo', 3009, 'Alicante', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
