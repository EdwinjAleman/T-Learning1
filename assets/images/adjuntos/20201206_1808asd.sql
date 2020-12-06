-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2020 a las 22:59:05
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

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `LOGIN` (IN `USER` CHAR(50), IN `PASS` CHAR(50))  BEGIN
		DECLARE USU CHAR(50);
        DECLARE ROL	CHAR(50);
		DECLARE FIC	CHAR(50);
		DECLARE IDUSU INT(10);
		DECLARE IDFIC INT(10);
		DECLARE CON INT unsigned;

		SELECT usu_usuari,tipo_usuario_id,fic_codigo,usu_id,fic_id INTO @USU,@ROL,@FIC,@IDUSU,@IDFIC FROM tbl_usuario
			INNER JOIN tbl_ficha on usu_ficid=fic_id
		WHERE usu_usuari=USER and usu_passwd=PASS;

		SELECT COUNT(log_id) INTO @CON FROM tbl_login WHERE log_ficid=@IDFIC;

		IF @CON<6 AND @IDUSU>0 THEN
			INSERT INTO tbl_login (log_usuid,log_ficid) values (@IDUSU,@IDFIC);
			SET @RES="SI";
		ELSE
			SET @RES="NO";
		END IF;

		SELECT @USU AS 'User',@FIC AS 'Ficha',@RES  AS 'Login',@ROL AS 'Rol',@IDUSU AS 'Idusu';

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_anuncio`
--

CREATE TABLE `tbl_anuncio` (
  `anu_id` int(12) NOT NULL,
  `anu_titl` varchar(240) DEFAULT NULL,
  `anu_descrpcn` varchar(240) DEFAULT NULL,
  `anu_fechCrcn` date DEFAULT NULL,
  `usu_usuari` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_anuncio`
--

INSERT INTO `tbl_anuncio` (`anu_id`, `anu_titl`, `anu_descrpcn`, `anu_fechCrcn`, `usu_usuari`) VALUES
(3, 'papel', 'asdasdasd', '2020-11-25', 'Negro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_area`
--

CREATE TABLE `tbl_area` (
  `are_id` int(10) NOT NULL,
  `are_nombre` varchar(60) NOT NULL,
  `are_fchcrt` timestamp NOT NULL DEFAULT current_timestamp(),
  `are_fchupd` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `are_sedid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_area`
--

INSERT INTO `tbl_area` (`are_id`, `are_nombre`, `are_fchcrt`, `are_fchupd`, `are_sedid`) VALUES
(1, 'Administracion', '2020-11-17 10:48:15', '2020-11-17 10:48:15', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_auditoria`
--

CREATE TABLE `tbl_auditoria` (
  `aud_id` int(20) NOT NULL,
  `aud_descrp` varchar(200) NOT NULL,
  `aud_accion` varchar(20) DEFAULT 'MOVIMIENTO',
  `aud_fchcrt` timestamp NOT NULL DEFAULT current_timestamp(),
  `aud_modid` int(10) NOT NULL,
  `aud_usuid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ciudad`
--

CREATE TABLE `tbl_ciudad` (
  `ciu_id` int(10) NOT NULL,
  `ciu_nombre` varchar(60) NOT NULL,
  `ciu_fchcrt` timestamp NOT NULL DEFAULT current_timestamp(),
  `ciu_fchupd` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ciu_depid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_ciudad`
--

INSERT INTO `tbl_ciudad` (`ciu_id`, `ciu_nombre`, `ciu_fchcrt`, `ciu_fchupd`, `ciu_depid`) VALUES
(1, 'Cali', '2020-11-17 10:43:21', '2020-11-17 10:43:21', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_comentario_foro`
--

CREATE TABLE `tbl_comentario_foro` (
  `com_id` int(10) NOT NULL,
  `com_mensj` varchar(250) NOT NULL,
  `com_usunom` varchar(50) NOT NULL,
  `com_foro_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_comentario_foro`
--

INSERT INTO `tbl_comentario_foro` (`com_id`, `com_mensj`, `com_usunom`, `com_foro_id`) VALUES
(1, 'Hola como estas 2', 'Pablo', 1),
(2, 'Hola como estas', 'Paula', 2),
(6, 'asdas', 'asdasd', 1),
(7, 'asdas', 'asdasd', 2),
(8, 'asdas', 'Gabriel', 2),
(9, 'zxczxczx', 'xzxcz', 1),
(10, 'asdasdasdasd', 'Gabriel', 2),
(11, 'kyc gei', 'lewis', 7),
(12, 'Hola como estas 2', 'Pablo', 1),
(13, 'Hola como estas', 'Paula', 2),
(14, 'asdas', 'asdasd', 1),
(15, 'asdas', 'asdasd', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_departamento`
--

CREATE TABLE `tbl_departamento` (
  `dep_id` int(10) NOT NULL,
  `dep_nombre` varchar(60) NOT NULL,
  `dep_fchcrt` timestamp NOT NULL DEFAULT current_timestamp(),
  `dep_fchupd` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `dep_paiid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_departamento`
--

INSERT INTO `tbl_departamento` (`dep_id`, `dep_nombre`, `dep_fchcrt`, `dep_fchupd`, `dep_paiid`) VALUES
(1, 'Valle del Cauca', '2020-11-17 10:42:19', '2020-11-30 10:42:19', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estado`
--

CREATE TABLE `tbl_estado` (
  `est_id` int(11) NOT NULL,
  `est_dscrpc` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_estado`
--

INSERT INTO `tbl_estado` (`est_id`, `est_dscrpc`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `title`, `color`, `start`, `end`) VALUES
(1, 'Evento Azul', '#0071c5', '2017-08-01 00:00:00', '2017-08-02 00:00:00'),
(2, 'Eventos 2', '#40E0D0', '2017-08-02 00:00:00', '2017-08-03 00:00:00'),
(3, 'Doble click para editar evento', '#008000', '2017-08-03 00:00:00', '2017-08-07 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_fases`
--

CREATE TABLE `tbl_fases` (
  `fas_id` int(11) NOT NULL,
  `fas_dscrpc` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_fases`
--

INSERT INTO `tbl_fases` (`fas_id`, `fas_dscrpc`) VALUES
(1, 'Analisis'),
(2, 'Planeacion'),
(3, 'Ejecucion'),
(4, 'Evaluacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ficha`
--

CREATE TABLE `tbl_ficha` (
  `fic_id` int(10) NOT NULL,
  `fic_codigo` varchar(60) NOT NULL,
  `fic_progrm` varchar(60) NOT NULL,
  `fic_abrvtr` varchar(10) NOT NULL,
  `fic_fchcrt` date NOT NULL,
  `fic_fchupd` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_ficha`
--

INSERT INTO `tbl_ficha` (`fic_id`, `fic_codigo`, `fic_progrm`, `fic_abrvtr`, `fic_fchcrt`, `fic_fchupd`) VALUES
(1, '1907036', 'Analisis y Desarrollo de Sistema de Informacion', 'ADSI', '2020-11-17', '2020-11-17'),
(2, '1907026', 'Analisis y Desarrollo de Sistemas de Informacion', 'ADSI', '2020-11-24', '2020-11-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_foro`
--

CREATE TABLE `tbl_foro` (
  `foro_id` int(7) NOT NULL,
  `foro_titulo` varchar(200) NOT NULL DEFAULT '',
  `foro_mensaje` varchar(200) NOT NULL DEFAULT '',
  `foro_fecha_inicio` date NOT NULL,
  `foro_fecha_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_foro`
--

INSERT INTO `tbl_foro` (`foro_id`, `foro_titulo`, `foro_mensaje`, `foro_fecha_inicio`, `foro_fecha_fin`) VALUES
(1, 'suqchaenfour', 'asdasdasd', '2020-11-04', '2020-11-05'),
(2, 'Prueba 121', 'Por favor comenta algo ', '2020-11-25', '2020-11-25'),
(3, 'Prueba 3', 'asdas', '2020-11-28', '2020-11-26'),
(4, 'Prueba 1159', 'asdasd', '2020-11-27', '2020-11-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_horario`
--

CREATE TABLE `tbl_horario` (
  `hor_id` int(10) NOT NULL,
  `hor_url` varchar(500) NOT NULL,
  `hor_triini` date NOT NULL,
  `hor_trifin` date NOT NULL,
  `hor_trinum` int(10) NOT NULL,
  `hor_ficcodigo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_horario`
--

INSERT INTO `tbl_horario` (`hor_id`, `hor_url`, `hor_triini`, `hor_trifin`, `hor_trinum`, `hor_ficcodigo`) VALUES
(1, '../assets/horarios/20201202_000408.pdf', '2020-12-01', '2020-12-31', 1, '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_inf_centr`
--

CREATE TABLE `tbl_inf_centr` (
  `inf_id` int(11) NOT NULL,
  `inf_soms` varchar(300) DEFAULT NULL,
  `inf_misn` varchar(300) DEFAULT NULL,
  `inf_visn` varchar(300) DEFAULT NULL,
  `inf_dirctr_genrl` varchar(30) DEFAULT NULL,
  `inf_dirctr_regnl` varchar(30) DEFAULT NULL,
  `inf_subdrctr_centr` varchar(30) DEFAULT NULL,
  `inf_cordndr_msnl` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_inf_centr`
--

INSERT INTO `tbl_inf_centr` (`inf_id`, `inf_soms`, `inf_misn`, `inf_visn`, `inf_dirctr_genrl`, `inf_dirctr_regnl`, `inf_subdrctr_centr`, `inf_cordndr_msnl`) VALUES
(1, 'El Centro Industrial, actualmente denominado Centro de Diseño Tecnológico Industrial, inició sus labores en 1961 en Cali, siendo el primer y más grande Centro de Formación de la regional Valle, donde sus instalaciones iniciaron en la planta de radiadores FASA, parte posterior del hoy Centro Comercia', 'Formar integralmente y con Calidad, Talento Humano capaz de diseñar y desarrollar Bienes y Servicios con Tecnologías Pioneras y pertinentes que coadyuven al progreso sostenible de procesos productivos en la Industria local, regional y nacional, al contar con personal comprometido con la práctica de ', 'Ser reconocidos para el año 2019 como Fuente Consultora, en el Diseño Tecnológico de bienes y Servicios, Regional, Nacional e Internacionalmente, para el desarrollo de la Calidad y Productividad que contribuye a la Competitividad del Sector Industrial y afines, dado que reconoce en el entorno, las T', 'Carlos Mario Estrada Molina', 'Aura Elvira Narváez Agudelo', 'Álex Amed Valencia', 'Néstor Espitia Torres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_login`
--

CREATE TABLE `tbl_login` (
  `log_id` int(10) NOT NULL,
  `log_fchcrt` timestamp NOT NULL DEFAULT current_timestamp(),
  `log_usuid` int(10) NOT NULL,
  `log_ficid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_login`
--

INSERT INTO `tbl_login` (`log_id`, `log_fchcrt`, `log_usuid`, `log_ficid`) VALUES
(103, '2020-12-06 21:51:27', 6, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_materialapoyo`
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
-- Volcado de datos para la tabla `tbl_materialapoyo`
--

INSERT INTO `tbl_materialapoyo` (`map_id`, `map_titulo`, `map_descrp`, `map_fecpub`, `map_archurl`, `map_fass_id`, `map_usr_id`) VALUES
(14, 'asd', 'asd', '2020-12-06', '20201206_1436asd.sql', 1, 2),
(15, 'asd', '123', '2020-12-06', '20201206_1437asd.js', 1, 2),
(16, 'asd', 'sadasd', '2020-12-06', '20201206_1610asd.sql', 1, 2),
(17, 'asd', 'dasd', '2020-12-06', '20201206_1612asd.sql', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_modalidad`
--

CREATE TABLE `tbl_modalidad` (
  `mod_id` int(10) NOT NULL,
  `mod_dscrpc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_modalidad`
--

INSERT INTO `tbl_modalidad` (`mod_id`, `mod_dscrpc`) VALUES
(1, 'Presencial'),
(2, 'Virtual');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_modulo`
--

CREATE TABLE `tbl_modulo` (
  `mod_id` int(10) NOT NULL,
  `mod_descrp` varchar(50) NOT NULL,
  `mod_fchcrt` timestamp NOT NULL DEFAULT current_timestamp(),
  `mod_fchupd` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pais`
--

CREATE TABLE `tbl_pais` (
  `pai_id` int(10) NOT NULL,
  `pai_nombre` varchar(60) NOT NULL,
  `pai_fchcrt` timestamp NOT NULL DEFAULT current_timestamp(),
  `pai_fchupd` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pai_postal` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_pais`
--

INSERT INTO `tbl_pais` (`pai_id`, `pai_nombre`, `pai_fchcrt`, `pai_fchupd`, `pai_postal`) VALUES
(1, 'Colombia', '2020-11-16 10:41:08', '2020-12-01 05:41:08', '9192');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_persona`
--

CREATE TABLE `tbl_persona` (
  `per_id` int(10) NOT NULL,
  `per_nombre` varchar(60) NOT NULL,
  `per_aplldo` varchar(60) NOT NULL,
  `per_fchnac` timestamp NOT NULL DEFAULT current_timestamp(),
  `per_dirccn` varchar(99) NOT NULL,
  `per_correo` varchar(99) NOT NULL,
  `per_telfno` varchar(20) NOT NULL,
  `per_fchcrt` timestamp NOT NULL DEFAULT current_timestamp(),
  `per_fchupd` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `per_areid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_persona`
--

INSERT INTO `tbl_persona` (`per_id`, `per_nombre`, `per_aplldo`, `per_fchnac`, `per_dirccn`, `per_correo`, `per_telfno`, `per_fchcrt`, `per_fchupd`, `per_areid`) VALUES
(1, 'Mayerlin', 'Ortiz', '2020-11-17 10:51:49', 'Cra 42B #26-04', 'luz.mayerlin2549@gmail.com', '3175232591', '2020-11-17 10:51:49', '2020-11-17 10:51:49', 1),
(2, 'Edwin', 'Aleman', '2020-11-25 04:07:20', 'Cra 28 b3 72u 26', 'jeagudelo6@gmai.com', '3165541923', '2020-11-25 04:07:20', '2020-11-25 04:07:20', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_responder`
--

CREATE TABLE `tbl_responder` (
  `res_id` int(10) NOT NULL,
  `res_mensj` varchar(250) NOT NULL,
  `res_usunom` varchar(50) NOT NULL,
  `res_com_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_responder`
--

INSERT INTO `tbl_responder` (`res_id`, `res_mensj`, `res_usunom`, `res_com_id`) VALUES
(3, 'sdasdas', 'hola', 3),
(4, 'hola hello', 'edwin', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_sede`
--

CREATE TABLE `tbl_sede` (
  `sed_id` int(10) NOT NULL,
  `sed_nombre` varchar(60) NOT NULL,
  `sed_fchcrt` timestamp NOT NULL DEFAULT current_timestamp(),
  `sed_fchupd` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sed_ciuid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_sede`
--

INSERT INTO `tbl_sede` (`sed_id`, `sed_nombre`, `sed_fchcrt`, `sed_fchupd`, `sed_ciuid`) VALUES
(1, 'Centro Tecnológico Industrial ', '2020-11-16 10:43:35', '2020-11-30 10:43:35', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_jornada`
--

CREATE TABLE `tbl_tipo_jornada` (
  `tip_jor_id` int(11) NOT NULL,
  `tip_jor_dscrpc` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_tipo_jornada`
--

INSERT INTO `tbl_tipo_jornada` (`tip_jor_id`, `tip_jor_dscrpc`) VALUES
(1, 'Diurna'),
(2, 'Nocturna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_oferta`
--

CREATE TABLE `tbl_tipo_oferta` (
  `tip_ofe_id` int(11) NOT NULL,
  `tip_ofe_dscrpc` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_tipo_oferta`
--

INSERT INTO `tbl_tipo_oferta` (`tip_ofe_id`, `tip_ofe_dscrpc`) VALUES
(1, 'Abierta'),
(2, 'Cerrada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_programa`
--

CREATE TABLE `tbl_tipo_programa` (
  `tip_pro_id` int(11) NOT NULL,
  `tip_pro_dscrpc` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_tipo_programa`
--

INSERT INTO `tbl_tipo_programa` (`tip_pro_id`, `tip_pro_dscrpc`) VALUES
(1, 'Auxiliar'),
(2, 'Tecnico'),
(3, 'Tecnologo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_usuario`
--

CREATE TABLE `tbl_tipo_usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_tipo_usuario`
--

INSERT INTO `tbl_tipo_usuario` (`id`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Aprendiz'),
(3, 'instructor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `usu_id` int(10) NOT NULL,
  `usu_usuari` varchar(60) NOT NULL,
  `usu_passwd` varchar(32) NOT NULL,
  `usu_fchcrt` timestamp NOT NULL DEFAULT current_timestamp(),
  `usu_fchupd` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usu_ficid` int(10) NOT NULL,
  `usu_perid` int(10) NOT NULL,
  `tipo_usuario_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`usu_id`, `usu_usuari`, `usu_passwd`, `usu_fchcrt`, `usu_fchupd`, `usu_ficid`, `usu_perid`, `tipo_usuario_id`) VALUES
(2, 'Nemucraft28', '85bebe8056ebca932e722b993e4e615e', '2020-11-18 01:13:55', '2020-12-05 01:34:10', 1, 1, 1),
(3, 'lewis', '81dc9bdb52d04dc20036dbd8313ed055', '2020-11-21 06:42:26', '2020-12-04 04:51:31', 1, 1, 2),
(4, 'lewisv4', '1234', '2020-11-21 09:23:48', '2020-12-01 06:55:01', 1, 1, 2),
(5, 'lewisv4re', 'lewisv4re', '2020-11-25 01:09:53', '2020-11-25 01:09:53', 1, 1, 1),
(6, 'Aleman', '1234', '2020-11-25 04:04:55', '2020-11-25 04:29:48', 2, 2, 1),
(12, 'edwin', 'ec6a6536ca304edf844d1d248a4f08dc', '2020-12-03 18:06:28', '2020-12-04 05:07:44', 1, 2, 1),
(15, 'aliz', '81dc9bdb52d04dc20036dbd8313ed055', '2020-12-05 01:33:16', '2020-12-06 17:53:39', 1, 2, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_anuncio`
--
ALTER TABLE `tbl_anuncio`
  ADD PRIMARY KEY (`anu_id`),
  ADD KEY `usu_usuari` (`usu_usuari`);

--
-- Indices de la tabla `tbl_area`
--
ALTER TABLE `tbl_area`
  ADD PRIMARY KEY (`are_id`),
  ADD KEY `tbl_area_ibfk_1` (`are_sedid`);

--
-- Indices de la tabla `tbl_auditoria`
--
ALTER TABLE `tbl_auditoria`
  ADD PRIMARY KEY (`aud_id`),
  ADD KEY `tbl_auditoria_ibfk_1` (`aud_usuid`),
  ADD KEY `tbl_auditoria_ibfk_2` (`aud_modid`);

--
-- Indices de la tabla `tbl_ciudad`
--
ALTER TABLE `tbl_ciudad`
  ADD PRIMARY KEY (`ciu_id`),
  ADD KEY `tbl_ciudad_ibfk_1` (`ciu_depid`);

--
-- Indices de la tabla `tbl_comentario_foro`
--
ALTER TABLE `tbl_comentario_foro`
  ADD PRIMARY KEY (`com_id`);

--
-- Indices de la tabla `tbl_departamento`
--
ALTER TABLE `tbl_departamento`
  ADD PRIMARY KEY (`dep_id`),
  ADD KEY `tbl_departamento_ibfk_1` (`dep_paiid`);

--
-- Indices de la tabla `tbl_estado`
--
ALTER TABLE `tbl_estado`
  ADD PRIMARY KEY (`est_id`);

--
-- Indices de la tabla `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_fases`
--
ALTER TABLE `tbl_fases`
  ADD PRIMARY KEY (`fas_id`);

--
-- Indices de la tabla `tbl_ficha`
--
ALTER TABLE `tbl_ficha`
  ADD PRIMARY KEY (`fic_id`);

--
-- Indices de la tabla `tbl_foro`
--
ALTER TABLE `tbl_foro`
  ADD PRIMARY KEY (`foro_id`);

--
-- Indices de la tabla `tbl_horario`
--
ALTER TABLE `tbl_horario`
  ADD PRIMARY KEY (`hor_id`);

--
-- Indices de la tabla `tbl_inf_centr`
--
ALTER TABLE `tbl_inf_centr`
  ADD PRIMARY KEY (`inf_id`);

--
-- Indices de la tabla `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `tbl_login_ibfk_1` (`log_usuid`),
  ADD KEY `tbl_login_ibfk_2` (`log_ficid`);

--
-- Indices de la tabla `tbl_materialapoyo`
--
ALTER TABLE `tbl_materialapoyo`
  ADD PRIMARY KEY (`map_id`),
  ADD KEY `tbl_materialapoyo_ibfk_1` (`map_fass_id`),
  ADD KEY `tbl_materialapoyo_ibfk_2` (`map_usr_id`);

--
-- Indices de la tabla `tbl_modalidad`
--
ALTER TABLE `tbl_modalidad`
  ADD PRIMARY KEY (`mod_id`);

--
-- Indices de la tabla `tbl_modulo`
--
ALTER TABLE `tbl_modulo`
  ADD PRIMARY KEY (`mod_id`);

--
-- Indices de la tabla `tbl_pais`
--
ALTER TABLE `tbl_pais`
  ADD PRIMARY KEY (`pai_id`);

--
-- Indices de la tabla `tbl_persona`
--
ALTER TABLE `tbl_persona`
  ADD PRIMARY KEY (`per_id`),
  ADD KEY `tbl_persona_ibfk_1` (`per_areid`);

--
-- Indices de la tabla `tbl_responder`
--
ALTER TABLE `tbl_responder`
  ADD PRIMARY KEY (`res_id`);

--
-- Indices de la tabla `tbl_sede`
--
ALTER TABLE `tbl_sede`
  ADD PRIMARY KEY (`sed_id`),
  ADD KEY `tbl_sede_ibfk_1` (`sed_ciuid`);

--
-- Indices de la tabla `tbl_tipo_jornada`
--
ALTER TABLE `tbl_tipo_jornada`
  ADD PRIMARY KEY (`tip_jor_id`);

--
-- Indices de la tabla `tbl_tipo_oferta`
--
ALTER TABLE `tbl_tipo_oferta`
  ADD PRIMARY KEY (`tip_ofe_id`);

--
-- Indices de la tabla `tbl_tipo_programa`
--
ALTER TABLE `tbl_tipo_programa`
  ADD PRIMARY KEY (`tip_pro_id`);

--
-- Indices de la tabla `tbl_tipo_usuario`
--
ALTER TABLE `tbl_tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`usu_id`),
  ADD KEY `tbl_usuario_ibfk_3` (`usu_perid`),
  ADD KEY `tbl_usuario_ibfk_4` (`usu_ficid`),
  ADD KEY `tbl_usuario_ibfk_5` (`tipo_usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_area`
--
ALTER TABLE `tbl_area`
  MODIFY `are_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_auditoria`
--
ALTER TABLE `tbl_auditoria`
  MODIFY `aud_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_ciudad`
--
ALTER TABLE `tbl_ciudad`
  MODIFY `ciu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_comentario_foro`
--
ALTER TABLE `tbl_comentario_foro`
  MODIFY `com_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tbl_departamento`
--
ALTER TABLE `tbl_departamento`
  MODIFY `dep_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_estado`
--
ALTER TABLE `tbl_estado`
  MODIFY `est_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tbl_fases`
--
ALTER TABLE `tbl_fases`
  MODIFY `fas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_ficha`
--
ALTER TABLE `tbl_ficha`
  MODIFY `fic_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_foro`
--
ALTER TABLE `tbl_foro`
  MODIFY `foro_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `log_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT de la tabla `tbl_materialapoyo`
--
ALTER TABLE `tbl_materialapoyo`
  MODIFY `map_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tbl_modalidad`
--
ALTER TABLE `tbl_modalidad`
  MODIFY `mod_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_modulo`
--
ALTER TABLE `tbl_modulo`
  MODIFY `mod_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_pais`
--
ALTER TABLE `tbl_pais`
  MODIFY `pai_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_persona`
--
ALTER TABLE `tbl_persona`
  MODIFY `per_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_responder`
--
ALTER TABLE `tbl_responder`
  MODIFY `res_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_sede`
--
ALTER TABLE `tbl_sede`
  MODIFY `sed_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_jornada`
--
ALTER TABLE `tbl_tipo_jornada`
  MODIFY `tip_jor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_oferta`
--
ALTER TABLE `tbl_tipo_oferta`
  MODIFY `tip_ofe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_programa`
--
ALTER TABLE `tbl_tipo_programa`
  MODIFY `tip_pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_usuario`
--
ALTER TABLE `tbl_tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `usu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_area`
--
ALTER TABLE `tbl_area`
  ADD CONSTRAINT `tbl_area_ibfk_1` FOREIGN KEY (`are_sedid`) REFERENCES `tbl_sede` (`sed_id`);

--
-- Filtros para la tabla `tbl_auditoria`
--
ALTER TABLE `tbl_auditoria`
  ADD CONSTRAINT `tbl_auditoria_ibfk_1` FOREIGN KEY (`aud_usuid`) REFERENCES `tbl_usuario` (`usu_id`),
  ADD CONSTRAINT `tbl_auditoria_ibfk_2` FOREIGN KEY (`aud_modid`) REFERENCES `tbl_modulo` (`mod_id`);

--
-- Filtros para la tabla `tbl_ciudad`
--
ALTER TABLE `tbl_ciudad`
  ADD CONSTRAINT `tbl_ciudad_ibfk_1` FOREIGN KEY (`ciu_depid`) REFERENCES `tbl_departamento` (`dep_id`);

--
-- Filtros para la tabla `tbl_departamento`
--
ALTER TABLE `tbl_departamento`
  ADD CONSTRAINT `tbl_departamento_ibfk_1` FOREIGN KEY (`dep_paiid`) REFERENCES `tbl_pais` (`pai_id`);

--
-- Filtros para la tabla `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD CONSTRAINT `tbl_login_ibfk_1` FOREIGN KEY (`log_usuid`) REFERENCES `tbl_usuario` (`usu_id`),
  ADD CONSTRAINT `tbl_login_ibfk_2` FOREIGN KEY (`log_ficid`) REFERENCES `tbl_ficha` (`fic_id`);

--
-- Filtros para la tabla `tbl_materialapoyo`
--
ALTER TABLE `tbl_materialapoyo`
  ADD CONSTRAINT `tbl_materialapoyo_ibfk_1` FOREIGN KEY (`map_fass_id`) REFERENCES `tbl_fases` (`fas_id`),
  ADD CONSTRAINT `tbl_materialapoyo_ibfk_2` FOREIGN KEY (`map_usr_id`) REFERENCES `tbl_usuario` (`usu_id`);

--
-- Filtros para la tabla `tbl_persona`
--
ALTER TABLE `tbl_persona`
  ADD CONSTRAINT `tbl_persona_ibfk_1` FOREIGN KEY (`per_areid`) REFERENCES `tbl_area` (`are_id`);

--
-- Filtros para la tabla `tbl_sede`
--
ALTER TABLE `tbl_sede`
  ADD CONSTRAINT `tbl_sede_ibfk_1` FOREIGN KEY (`sed_ciuid`) REFERENCES `tbl_ciudad` (`ciu_id`);

--
-- Filtros para la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD CONSTRAINT `tbl_usuario_ibfk_1` FOREIGN KEY (`usu_perid`) REFERENCES `tbl_persona` (`per_id`),
  ADD CONSTRAINT `tbl_usuario_ibfk_2` FOREIGN KEY (`usu_ficid`) REFERENCES `tbl_ficha` (`fic_id`),
  ADD CONSTRAINT `tbl_usuario_ibfk_3` FOREIGN KEY (`usu_perid`) REFERENCES `tbl_persona` (`per_id`),
  ADD CONSTRAINT `tbl_usuario_ibfk_4` FOREIGN KEY (`usu_ficid`) REFERENCES `tbl_ficha` (`fic_id`),
  ADD CONSTRAINT `tbl_usuario_ibfk_5` FOREIGN KEY (`tipo_usuario_id`) REFERENCES `tbl_tipo_usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
