-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2020 a las 20:19:22
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `t-learning`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_material`
--

CREATE TABLE `tbl_materialapoyo` (
  `map_id` int(10) NOT NULL,
  `map_titulo` varchar(50) NOT NULL,
  `map_descrp` varchar(300) NOT NULL,
  `map_fecpub` date NOT NULL,
  `map_archurl` varchar(60) NOT NULL,
  `map_fass_id` int(10) NOT NULL,
  `map_usr_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_material`
--

INSERT INTO `tbl_materialapoyo` (`map_id`, `map_titulo`, `map_descrp`, `map_fecpub`, `map_archurl`, `map_fass_id`, `map_usr_id`) VALUES
(10, 'WEWE', 'SDSD', '2020-12-06', '20201206_1204WEWE.docx', 1, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_material`
--
ALTER TABLE `tbl_materialapoyo`
  ADD PRIMARY KEY (`map_id`),
  ADD KEY `tbl_materialapoyo_ibfk_1` (`map_fass_id`),
  ADD KEY `tbl_materialapoyo_ibfk_2` (`map_usr_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_material`
--
ALTER TABLE `tbl_materialapoyo`
  MODIFY `map_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_material`
--
ALTER TABLE `tbl_materialapoyo`
  ADD CONSTRAINT `tbl_materialapoyo_ibfk_1` FOREIGN KEY (`map_fass_id`) REFERENCES `tbl_fases` (`fas_id`),
  ADD CONSTRAINT `tbl_materialapoyo_ibfk_2` FOREIGN KEY (`map_usr_id`) REFERENCES `tbl_usuario` (`usu_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
