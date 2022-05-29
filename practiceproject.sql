-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2022 a las 04:22:17
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practiceproject`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `iduser` bigint(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cargo` varchar(40) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`iduser`, `name`, `last_name`, `phone`, `email`, `cargo`, `estado`, `pass`) VALUES
(1010, 'fabian', 'barrera', '3115555555', 'fabian@prueba.com', 'Administrador', 'Activo', '892e83036aa8a5bced0f1164849a5495'),
(1013, 'Fabian', 'Barrera ', '3218483745', 'proyectosweb.fabian@gmail.com', 'Administrador', 'Activo', '0d64a3334f572476a36b039ab1158b1a'),
(1014, 'Pedro', 'Perez', '3115556699', 'pedro@prueba.com', 'Vendedor', 'Activo', '6817a8c319cb881e2e53372baf40320c'),
(1015, 'Mario', 'Peña', '3116998745', 'mario@prueba.com', 'Supervisor', 'Activo', '13fa8a733cc1ac3f121059c5f1c1052f');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
