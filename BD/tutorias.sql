-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2019 a las 02:18:42
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tutorias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `param_asignaturas`
--

CREATE TABLE `param_asignaturas` (
  `id_param_asignaturas` int(10) NOT NULL,
  `fk_id_param_programas` int(10) NOT NULL,
  `asignaturas` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `param_asignaturas`
--

INSERT INTO `param_asignaturas` (`id_param_asignaturas`, `fk_id_param_programas`, `asignaturas`) VALUES
(1, 1, 'Nueva'),
(2, 2, 'Ética');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `param_lugares`
--

CREATE TABLE `param_lugares` (
  `id_param_lugares` int(10) NOT NULL,
  `sede` varchar(150) NOT NULL,
  `direccion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `param_lugares`
--

INSERT INTO `param_lugares` (`id_param_lugares`, `sede`, `direccion`) VALUES
(1, 'Bogotá', 'Carrrera 201 NO. 34'),
(2, 'Barranquilla', 'La Soledad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `param_programas`
--

CREATE TABLE `param_programas` (
  `id_param_programas` int(10) NOT NULL,
  `escuela` varchar(150) NOT NULL,
  `programa` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `param_programas`
--

INSERT INTO `param_programas` (`id_param_programas`, `escuela`, `programa`) VALUES
(1, 'Ciencia de la salid', 'Administración de empresas'),
(2, 'EIAM', 'Psicología');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `param_temas`
--

CREATE TABLE `param_temas` (
  `id_param_temas` int(10) NOT NULL,
  `fk_id_param_asignaturas` int(10) NOT NULL,
  `temas` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `param_temas`
--

INSERT INTO `param_temas` (`id_param_temas`, `fk_id_param_asignaturas`, `temas`) VALUES
(1, 2, 'Impuestos .'),
(2, 1, 'Filosofía');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `log_user` varchar(70) NOT NULL,
  `movil` varchar(12) NOT NULL,
  `email` varchar(70) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `state` int(1) NOT NULL DEFAULT '0' COMMENT '0: newUser; 1:active; 2:inactive',
  `perfil` int(1) NOT NULL DEFAULT '0' COMMENT '99: Super Admin; 1: Admin; 0: Normal'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `first_name`, `last_name`, `log_user`, `movil`, `email`, `password`, `state`, `perfil`) VALUES
(1, 'Administrador', 'Motta', 'admin@gmail.com', '4034089921', 'benmotta@gmail.com', '25446782e2ccaf0afdb03e5d61d0fbb9', 1, 99);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `param_asignaturas`
--
ALTER TABLE `param_asignaturas`
  ADD PRIMARY KEY (`id_param_asignaturas`),
  ADD KEY `fk_id_param_programas` (`fk_id_param_programas`);

--
-- Indices de la tabla `param_lugares`
--
ALTER TABLE `param_lugares`
  ADD PRIMARY KEY (`id_param_lugares`);

--
-- Indices de la tabla `param_programas`
--
ALTER TABLE `param_programas`
  ADD PRIMARY KEY (`id_param_programas`);

--
-- Indices de la tabla `param_temas`
--
ALTER TABLE `param_temas`
  ADD PRIMARY KEY (`id_param_temas`),
  ADD KEY `fk_id_param_asignaturas` (`fk_id_param_asignaturas`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `log_user` (`log_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `param_asignaturas`
--
ALTER TABLE `param_asignaturas`
  MODIFY `id_param_asignaturas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `param_lugares`
--
ALTER TABLE `param_lugares`
  MODIFY `id_param_lugares` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `param_programas`
--
ALTER TABLE `param_programas`
  MODIFY `id_param_programas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `param_temas`
--
ALTER TABLE `param_temas`
  MODIFY `id_param_temas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `param_asignaturas`
--
ALTER TABLE `param_asignaturas`
  ADD CONSTRAINT `param_asignaturas_ibfk_1` FOREIGN KEY (`fk_id_param_programas`) REFERENCES `param_programas` (`id_param_programas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `param_temas`
--
ALTER TABLE `param_temas`
  ADD CONSTRAINT `param_temas_ibfk_1` FOREIGN KEY (`fk_id_param_asignaturas`) REFERENCES `param_asignaturas` (`id_param_asignaturas`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
