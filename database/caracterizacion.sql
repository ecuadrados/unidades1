-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-12-2020 a las 21:59:51
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `unidades_database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracterizacion`
--

CREATE TABLE `caracterizacion` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `tipo_documento` varchar(100) NOT NULL,
  `documento` varchar(100) NOT NULL,
  `edad` int(11) DEFAULT NULL,
  `genero` varchar(50) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `barrio` varchar(100) DEFAULT NULL,
  `localidad` varchar(50) DEFAULT NULL,
  `estrato` int(2) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `otro_contacto` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `estado_civil` varchar(50) DEFAULT NULL,
  `condiciones_vivienda` varchar(50) DEFAULT NULL,
  `tipo_vivienda` varchar(50) DEFAULT NULL,
  `cuantos_cuartos` int(11) DEFAULT NULL,
  `cuantos_hogares` int(11) DEFAULT NULL,
  `servicio_publico` varchar(2) DEFAULT NULL,
  `agua` varchar(2) DEFAULT 'No',
  `electricidad` varchar(2) DEFAULT NULL,
  `gas` varchar(2) DEFAULT NULL,
  `alcantarillado` varchar(2) DEFAULT NULL,
  `internet` varchar(2) DEFAULT NULL,
  `etnia` varchar(50) DEFAULT NULL,
  `persona_discapacidad` varchar(2) DEFAULT NULL,
  `victima_conflicto` varchar(2) DEFAULT NULL,
  `joven_riesgo` varchar(2) DEFAULT NULL,
  `madre_cabeza` varchar(2) DEFAULT NULL,
  `migrante_venezolano` varchar(2) DEFAULT NULL,
  `certificado_permanencia` varchar(2) DEFAULT NULL,
  `nivel_academico` varchar(50) DEFAULT NULL,
  `programa_salud` varchar(50) DEFAULT NULL,
  `nombre_eps` varchar(50) DEFAULT NULL,
  `sisben` varchar(11) DEFAULT NULL,
  `puntaje_sisben` varchar(50) DEFAULT NULL,
  `observaciones` varchar(300) DEFAULT NULL,
  `personas_cargo` varchar(2) DEFAULT NULL,
  `cuantas_persona` varchar(50) DEFAULT NULL,
  `niños_escolaridad` varchar(2) DEFAULT NULL,
  `situacion_calle` varchar(2) DEFAULT NULL,
  `consume_sustancia` varchar(2) DEFAULT NULL,
  `violencia_intrafamiliar` varchar(2) DEFAULT NULL,
  `pertenece_organizacion` varchar(2) DEFAULT NULL,
  `empleado` varchar(11) DEFAULT NULL,
  `desempleado` varchar(11) DEFAULT NULL,
  `trabajador_independiente` varchar(11) DEFAULT NULL,
  `informal` varchar(11) DEFAULT NULL,
  `formal` varchar(2) DEFAULT NULL,
  `ideas_negocios` varchar(2) DEFAULT NULL,
  `cual_idea` varchar(100) DEFAULT NULL,
  `emprendimiento` varchar(2) DEFAULT NULL,
  `fortalecimiento` varchar(11) DEFAULT NULL,
  `programa_gubernamental` varchar(2) DEFAULT NULL,
  `fecha_encuesta` date DEFAULT NULL,
  `ref_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caracterizacion`
--
ALTER TABLE `caracterizacion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caracterizacion`
--
ALTER TABLE `caracterizacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
