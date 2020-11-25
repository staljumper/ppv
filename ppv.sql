-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2020 a las 17:09:08
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ppv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `nick` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `nick`, `password`) VALUES
(1, 'pepe', 'pepe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `titulo` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `favoritos`
--

INSERT INTO `favoritos` (`titulo`, `usuario`) VALUES
('fdgdg', 'pepe'),
('fdgdg', 'pepe'),
('sdgad', 'a'),
('sgsg', 'a'),
('unlg', 'a'),
('jvbhn', 'a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `de` varchar(100) NOT NULL,
  `para` varchar(100) NOT NULL,
  `asunto` text NOT NULL,
  `mensaje` text NOT NULL,
  `leido` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `titulo`, `de`, `para`, `asunto`, `mensaje`, `leido`) VALUES
(2, 'dfgdfg', 'a', 'adm', 'gvbhjk', 'dfghj ', 1),
(3, 'sdgad', 'a', 'adm', 'asdasd', ' asdasd', 1),
(4, 'Prueba final', 'adm', 'a', 'asunto prueba', 'fsgsg', 1),
(5, 'Prueba final', 'a', 'adm', 'asunto prueba', 'mensaje de respuesta de usuARIO a amd', 1),
(6, 'Prueba final', 'adm', 'a', 'asunto prueba', 'caca', 0),
(8, 'dfgdfg', 'adm', 'ido', 'idoia', 'respuesa ido', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pisos`
--

CREATE TABLE `pisos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `habitaciones` int(50) NOT NULL,
  `precio` int(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `distancia` int(50) NOT NULL,
  `telefono` int(20) NOT NULL,
  `imagen` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pisos`
--

INSERT INTO `pisos` (`id`, `titulo`, `habitaciones`, `precio`, `descripcion`, `distancia`, `telefono`, `imagen`) VALUES
(17, 'fdgdg', 0, 0, 'sgffsg', 0, 0, 'fgdf'),
(18, 'dfgdfg', 0, 0, 'Piso modificado', 0, 0, 'dfgdfg'),
(19, 'dfgdfg', 0, 0, 'fdgfg', 0, 0, 'gfdgd'),
(20, 'sgsg', 0, 0, 'sgsgsf', 0, 0, 'sgsg'),
(21, 'sdgsgs', 0, 0, 'fdsgsg', 0, 0, 'sgsdds'),
(22, 'sdgad', 0, 0, 'sfgsgs', 0, 0, 'sgsdgsd'),
(23, 'sdgsdgs', 0, 0, 'sdgsg', 0, 0, 'sdgsdg'),
(24, 'dsgdsg', 0, 0, 'dsgsdg', 0, 0, 'sdgsg'),
(25, 'gsdg', 0, 0, 'fdsfsdg', 0, 0, 'dsgdsg'),
(26, 'sdgsdg', 0, 0, 'gsdgsdg', 0, 0, 'sdgsdg'),
(27, 'sdgsg', 0, 0, 'gsgsg', 0, 0, 'sdgdsg'),
(28, 'dsggd', 0, 0, 'gsdgsdg', 0, 0, 'dsgdsg'),
(29, 'biugiu', 0, 0, 'adfsdg', 0, 0, 'fgfs'),
(30, 'unlg', 0, 0, 'uyyfvdsfhbk', 0, 0, 'ukbnrwgo'),
(31, 'vb', 0, 0, 'iusfn', 0, 0, 'vbn'),
(32, 'vgbhnj', 0, 0, 'dyfguihujo', 0, 0, 'cgvbhnj'),
(33, 'gh', 0, 0, 'gvbhkjnkl', 0, 0, 'cfhgvjbhnj'),
(34, 'jvbhn', 0, 0, 'gchgvbhjknjlkm', 0, 0, 'cvghbjn'),
(35, 'vghbjn', 0, 0, 'fghj', 0, 0, 'gvhbnj'),
(36, 'Prueba final', 0, 0, 'prueba', 0, 0, 'o');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(1) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nick` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `ape1` varchar(200) NOT NULL,
  `ape2` varchar(200) NOT NULL,
  `telefono` int(20) NOT NULL,
  `edad` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nick`, `nombre`, `ape1`, `ape2`, `telefono`, `edad`) VALUES
(75, 'a@a.com', 'a', 'a', 'a', 'a', 'a', 0, 0),
(77, 'ido@ido.com', 'a', 'ido', 'ido', 'ido', 'ido', 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pisos`
--
ALTER TABLE `pisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pisos`
--
ALTER TABLE `pisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
