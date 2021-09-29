-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2021 a las 06:56:20
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud_especies`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros_biologicos`
--

CREATE TABLE `registros_biologicos` (
  `id` int(10) NOT NULL,
  `especie` varchar(50) NOT NULL,
  `familia` varchar(250) DEFAULT NULL,
  `nombre_comun` varchar(100) NOT NULL,
  `proyecto` varchar(100) DEFAULT NULL,
  `base_registro` int(2) NOT NULL DEFAULT 0,
  `identificacion_year` varchar(10) DEFAULT NULL,
  `departamento` varchar(50) DEFAULT NULL,
  `municipio` varchar(50) DEFAULT NULL,
  `localidad` varchar(50) DEFAULT NULL,
  `latitud` varchar(45) DEFAULT NULL,
  `longitud` varchar(45) DEFAULT NULL,
  `autor` varchar(60) DEFAULT NULL,
  `fecha_captura` varchar(20) DEFAULT NULL,
  `ecoregion` varchar(60) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registros_biologicos`
--

INSERT INTO `registros_biologicos` (`id`, `especie`, `familia`, `nombre_comun`, `proyecto`, `base_registro`, `identificacion_year`, `departamento`, `municipio`, `localidad`, `latitud`, `longitud`, `autor`, `fecha_captura`, `ecoregion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '', 'felinos', 'el gato con botas', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registros_biologicos`
--
ALTER TABLE `registros_biologicos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registros_biologicos`
--
ALTER TABLE `registros_biologicos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
