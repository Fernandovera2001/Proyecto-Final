-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 17-12-2019 a las 14:14:19
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
(1, 7, '2019-12-25', ''),
(2, 5, '2019-12-20', ''),
(3, 1, '2019-12-20', ''),
(4, 2, '2019-12-20', 'vino por que tenia una molestia'),
(5, 5, '0000-00-00', ''),
(6, 8, '2019-12-10', 'vino por que le dolia la muela'),
(7, 8, '2019-12-10', 'vino a taparse la muela por segunda vez'),
(8, 8, '2019-12-26', 'soy re capo'),
(9, 8, '2019-12-26', 'BEBESITA'),
(10, 2, '2019-12-12', 'Vino por que tenia un dolor inmenso en el diente de atras'),
(11, 1, '2019-12-13', 'vino xqe gianluca le pego BOE'),
(12, 11, '2019-12-13', 'le cure un dolor en la cola booooooe'),
(13, 12, '2019-12-13', 'vino por quele dolia el estomago\r\n'),
(14, 13, '2019-12-16', 'hasta los huevos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
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

INSERT INTO `login` (`id`, `nombre`, `apellido`, `email`, `fecha_nacimiento`, `dni`, `genero`, `obra_social`, `contrasenia`, `tipo`, `token`) VALUES
(1, 'Claudio', 'Vera', 'claudio.vera@cts', '0000-00-00', 43382247, 'hombre', 'ipross', '123', 'paciente', ''),
(2, 'mariane', 'vere', 'mariane@cts', '0000-00-00', 12131445, 'femenino', 'medife', '1234', 'paciente', ''),
(3, '', '', 'FacundoDoc@hotmail.com.ar', '0000-00-00', 0, '', '', 'facudoc1234', 'doctor', ''),
(4, 'lola', 'mento', 'lo@la', '0000-00-00', 12332314, 'femenino', 'medife', '123', 'paciente', ''),
(5, 'Emiliano', 'Hernandez', 'hernandez.emi@cts.edu.ar', '0000-00-00', 43948265, 'hombre', 'Arcod Salud', '123', 'paciente', ''),
(6, 'prueba1', 'prueba2', 'prueb1@cts.edu.ar', '0000-00-00', 23232232, 'femenino', 'Ipross', '123', 'paciente', ''),
(7, 'fernando', 'vera', 'vera.fernando@cts.edu.ar', '0000-00-00', 43382247, 'hombre', 'Medife', '123', 'paciente', '3a835d3215755c435ef4fe9965a3f2a0'),
(8, 'martin', 'gracey', 'gracey.martin@cts.edu.ar', '0000-00-00', 43382247, 'hombre', 'Medife', '123', 'paciente', ''),
(9, 'Enzo', 'Vera', 'Vera.enzo@cts.edu.ar', '0000-00-00', 13135123, 'hombre', 'Medife', '123', 'paciente', ''),
(10, 'fer', 'fer', 'ferbarilo32@gmail.com', '2001-06-23', 43382247, 'hombre', 'Medife', '123', 'paciente', ''),
(11, 'Tomas', 'Zuñiga', 'zuñiga.zuto@cts.edu.ar', '1999-10-19', 42153004, 'hombre', 'Union Personal', '123', 'paciente', ''),
(12, 'Gianluca', 'barreyro', 'gian.barreyro@cts.edu.ar', '2000-11-14', 42911632, 'hombre', 'ipross', '123', 'paciente', ''),
(13, 'Emiliano', 'Hernandez', 'hernandez.emi@cts.ar', '2003-05-03', 43948265, 'hombre', 'Arcod Salud', '123', 'paciente', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `id` int(11) NOT NULL,
  `id_pacientes` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `hora` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`id`, `id_pacientes`, `titulo`, `fecha`, `hora`) VALUES
(1, 6, 'Dolor agudo de muela', '2019-12-17', 16),
(2, 11, 'Control', '2019-12-24', 18);

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
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `historial_clinico`
--
ALTER TABLE `historial_clinico`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
