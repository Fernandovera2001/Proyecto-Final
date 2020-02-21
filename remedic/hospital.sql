-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-02-2020 a las 10:30:10
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hospital`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_clinico`
--

CREATE TABLE `historial_clinico` (
  `id` int(1) NOT NULL,
  `id_pacientes` int(11) NOT NULL,
  `fecha_consulta` date NOT NULL,
  `historial` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `historial_clinico`
--

INSERT INTO `historial_clinico` (`id`, `id_pacientes`, `fecha_consulta`, `historial`) VALUES
(5, 13, '2020-02-15', 'me siento muy muy mal'),
(21, 5, '2020-02-20', '95239525');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `nombre` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `dni` int(12) NOT NULL,
  `genero` varchar(15) NOT NULL,
  `obra_social` varchar(15) NOT NULL,
  `contrasenia` varchar(11) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'paciente',
  `token` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id_login`, `nombre`, `apellido`, `email`, `fecha_nacimiento`, `dni`, `genero`, `obra_social`, `contrasenia`, `tipo`, `token`) VALUES
(1, 'Claudio', 'Vera', 'claudio.vera@cts', '0000-00-00', 43382247, 'hombre', 'ipross', '123', 'paciente', ''),
(2, 'mariane', 'vere', 'mariane@cts', '0000-00-00', 12131445, 'femenino', 'medife', '1234', 'paciente', ''),
(3, '', '', 'FacundoDoc@hotmail.com.ar', '0000-00-00', 0, '', '', '123', 'doctor', ''),
(4, 'lola', 'mento', 'lo@la', '0000-00-00', 12332314, 'femenino', 'medife', '123', 'paciente', ''),
(5, 'Emiliano', 'Hernandez', 'hernandez.emi@cts.edu.ar', '0000-00-00', 43948265, 'hombre', 'Arcod Salud', '123', 'paciente', '19b650660b253761af189682e03501dd'),
(6, 'prueba1', 'prueba2', 'prueb1@cts.edu.ar', '0000-00-00', 23232232, 'femenino', 'Ipross', '123', 'paciente', ''),
(7, 'fernando', 'vera', 'vera.fernando@cts.edu.ar', '0000-00-00', 43382247, 'hombre', 'Medife', '123', 'paciente', ''),
(8, 'martin', 'gracey', 'gracey.martin@cts.edu.ar', '0000-00-00', 43382247, 'hombre', 'Medife', '123', 'paciente', '3c7781a36bcd6cf08c11a970fbe0e2a6'),
(9, 'Enzo', 'Vera', 'Vera.enzo@cts.edu.ar', '0000-00-00', 13135123, 'hombre', 'Medife', '123', 'paciente', ''),
(10, 'fer', 'fer', 'ferbarilo32@gmail.com', '2001-06-23', 43382247, 'hombre', 'Medife', '123', 'paciente', ''),
(11, 'Tomas', 'Zuñiga', 'zuñiga.zuto@cts.edu.ar', '1999-10-19', 42153004, 'hombre', 'Union Personal', '123', 'paciente', ''),
(12, 'Gianluca', 'barreyro', 'gian.barreyro@cts.edu.ar', '2000-11-14', 42911632, 'hombre', 'ipross', '123', 'paciente', ''),
(13, 'Emiliano', 'Hernandez', 'hernandez.emi@cts.ar', '2003-05-03', 43948265, 'hombre', 'Arcod Salud', '123', 'paciente', ''),
(15, 'Paola', 'Vera', 'vera.paola@gmail.com.ar', '1981-11-23', 29165629, 'femenino', 'Ospe', '123', 'paciente', ''),
(24, 'fe', 'fer', 'fer@fer', '2019-12-03', 56546565, 'hombre', 'Medife', '123', 'paciente', ''),
(29, 'Fer', 'Vera', 'f@f.com', '2001-06-23', 43382247, 'hombre', 'Arcod Salud', '123', 'paciente', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `id_turnos` int(11) NOT NULL,
  `id_pacientes` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `hora` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `historial_clinico`
--
ALTER TABLE `historial_clinico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`id_turnos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `historial_clinico`
--
ALTER TABLE `historial_clinico`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `id_turnos` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
