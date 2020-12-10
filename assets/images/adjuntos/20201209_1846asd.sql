-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2020 a las 23:20:23
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
  `are_nombr` varchar(50) NOT NULL,
  `are_sedid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_area`
--

INSERT INTO `tbl_area` (`are_id`, `are_nombr`, `are_sedid`) VALUES
(35, 'asdasd', 1),
(36, 'asdasd', 2),
(37, 'Juanito', 2);

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
(1, 'Cali', '2020-11-17 05:43:21', '2020-11-17 05:43:21', 1);

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
(10, 'asdasdasdasd', 'Gabriel', 2);

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
(1, 'Valle del Cauca', '2020-11-17 05:42:19', '2020-11-30 05:42:19', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estado`
--

CREATE TABLE `tbl_estado` (
  `est_id` int(10) NOT NULL,
  `est_nombr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_estado`
--

INSERT INTO `tbl_estado` (`est_id`, `est_nombr`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_evento`
--

CREATE TABLE `tbl_evento` (
  `eve_id` int(10) NOT NULL,
  `eve_nombr` varchar(50) NOT NULL,
  `eve_descrpcn` varchar(100) NOT NULL,
  `eve_fech_inc` datetime NOT NULL,
  `eve_fech_fn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_fases`
--

CREATE TABLE `tbl_fases` (
  `fas_id` int(10) NOT NULL,
  `fas_nombr_fas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_fases`
--

INSERT INTO `tbl_fases` (`fas_id`, `fas_nombr_fas`) VALUES
(1, 'ANALISIS'),
(2, 'PLANEACION'),
(3, 'EJECUCION'),
(4, 'EVALUACION');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ficha`
--

CREATE TABLE `tbl_ficha` (
  `fic_id` int(10) NOT NULL,
  `fic_codigo` int(20) NOT NULL,
  `fic_fch_inc` date NOT NULL,
  `fic_fch_fin` date NOT NULL,
  `fic_pro_for_id` int(10) NOT NULL,
  `fic_tip_jor_id` int(10) NOT NULL,
  `fic_tip_ofe_id` int(10) NOT NULL,
  `fic_mod_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_ficha`
--

INSERT INTO `tbl_ficha` (`fic_id`, `fic_codigo`, `fic_fch_inc`, `fic_fch_fin`, `fic_pro_for_id`, `fic_tip_jor_id`, `fic_tip_ofe_id`, `fic_mod_id`) VALUES
(1, 14616846, '2020-12-07', '2020-12-15', 16, 1, 1, 1);

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
(1, 'Prueba 121', 'Por favor comenta algo ', '2020-11-25', '2020-11-25'),
(11, 'dasdasdas', 'asdasdas', '2020-11-20', '2020-12-30'),
(12, 'VAmos a hablar', 'asdasdasd', '2020-12-04', '2020-12-31'),
(13, 'Prueba 2', 'asda', '2020-12-05', '2020-12-24'),
(14, 'EL NEGRO', 'asdasdasd', '2020-12-17', '2020-12-30'),
(15, 'Prudasdas', 'SDASDASD', '2020-12-18', '2020-12-29'),
(16, 'Prueba 2', 'lujhoihp', '2020-12-09', '2020-12-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_inf_centr`
--

CREATE TABLE `tbl_inf_centr` (
  `inf_id` int(10) NOT NULL,
  `inf_soms` varchar(2000) NOT NULL,
  `inf_misn` varchar(1000) NOT NULL,
  `inf_visn` varchar(1000) NOT NULL,
  `inf_dirctr_genrl` varchar(30) NOT NULL,
  `inf_dirctr_regnl` varchar(30) NOT NULL,
  `inf_subdrctr_centr` varchar(30) NOT NULL,
  `inf_cordndr_msnl` varchar(30) NOT NULL,
  `inf_ubi` varchar(100) NOT NULL,
  `inf_lin` varchar(50) NOT NULL,
  `inf_atncn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_inf_centr`
--

INSERT INTO `tbl_inf_centr` (`inf_id`, `inf_soms`, `inf_misn`, `inf_visn`, `inf_dirctr_genrl`, `inf_dirctr_regnl`, `inf_subdrctr_centr`, `inf_cordndr_msnl`, `inf_ubi`, `inf_lin`, `inf_atncn`) VALUES
(3, 'El Centro Industrial, actualmente denominado Centro de Diseño Tecnológico Industrial, inició sus labores en 1961 en Cali, siendo el primer y más grande Centro de Formación de la regional Valle, donde sus instalaciones iniciaron en la planta de radiadores FASA, parte posterior del hoy Centro Comercial UNICO, con programas metalmecánicos, construcción, confección, cuero, electricidad y algunos de los programas móviles, rurales y urbanos.\r\n\r\nA partir del 2015 inicia una nueva etapa para el Centro, pues se traslada a una nueva sede en el Distrito de Aguablanca, con mejoras en su infraestructura, dando respuesta a los requerimientos de la comunidad, teniendo una mayor cobertura geográfica del SENA en la ciudad y generando un mayor impacto social, al hacer presencia en una de las zonas con mayor concentración de población víctima del conflicto armado en Cali.\r\n\r\nEn esta nueva sede, el Centro de Diseño Tecnológico Industrial, adicional a la oferta de programas de formación, integra otros servicios institucionales como el Servicio Público de Empleo, Certificación de competencias Laborales, Articulación con la media técnica y Emprendimiento.', 'Formar integralmente y con Calidad, Talento Humano capaz de diseñar y desarrollar Bienes y Servicios con Tecnologías Pioneras y pertinentes que coadyuven al progreso sostenible de procesos productivos en la Industria local, regional y nacional, al contar con personal comprometido con la práctica de Valores y Principios, que responden a lineamientos Éticos como lo requiere el Sector Público, en bien de la Comunidad.', 'Ser reconocidos para el año 2019 como Fuente Consultora, en el Diseño Tecnológico de bienes y Servicios, Regional, Nacional e Internacionalmente, para el desarrollo de la Calidad y Productividad que contribuye a la Competitividad del Sector Industrial y afines, dado que reconoce en el entorno, las Tendencias tecnológicas, el Manejo del Medio Ambiente y los Fundamentos de Salud Ocupacional, para ofrecer soluciones viables.', 'Carlos Mario Estrada Molina, D', 'Aura Elvira Narváez Agudelo, D', 'Álex Amed Valencia, Subdirecto', 'Néstor Espitia Torres, Coordin', 'Ubicación Calle 72K #26J - 97 El Pondaje Cali - Colombia', 'Línea de atención: 4315800 Ext. 22776', 'Horario de atención: lunes a viernes de 8:00 am a ');

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
(216, '2020-12-09 21:34:17', 2, 1),
(217, '2020-12-09 22:11:45', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_material`
--

CREATE TABLE `tbl_material` (
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

INSERT INTO `tbl_material` (`map_id`, `map_titulo`, `map_descrp`, `map_fecpub`, `map_archurl`, `map_fass_id`, `map_usr_id`) VALUES
(0, 'sasdas', 'fsdf', '2020-12-09', '20201206_1645sasdas.png', 1, 2),
(0, 'asdasd', 'qweqwe', '2020-12-24', '20201206_1658asdasd.png', 1, 2),
(0, 'sasdas', 'fsdf', '2020-12-09', '20201206_1645sasdas.png', 1, 2),
(0, 'asdasd', 'qweqwe', '2020-12-24', '20201206_1658asdasd.png', 1, 2),
(0, 'sasdas', 'jhknk', '2020-12-08', '20201207_1300sasdas.png', 1, 2),
(0, 'PLAN DE MEJORA', 'Mayerlin Ortiz', '2020-12-07', '20201207_1317PLAN DE MEJORA.png', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_modalidad`
--

CREATE TABLE `tbl_modalidad` (
  `mod_id` int(10) NOT NULL,
  `mod_nombr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_modalidad`
--

INSERT INTO `tbl_modalidad` (`mod_id`, `mod_nombr`) VALUES
(1, 'Presencial'),
(6, 'Virtual');

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
(1, 'Colombia', '2020-11-16 05:41:08', '2020-12-01 00:41:08', '9192');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_persona`
--

CREATE TABLE `tbl_persona` (
  `per_id` int(10) NOT NULL,
  `per_nombr` varchar(30) NOT NULL,
  `per_aplld` varchar(30) NOT NULL,
  `per_cedl` int(10) NOT NULL,
  `per_dirccn` varchar(50) NOT NULL,
  `per_corr` varchar(50) NOT NULL,
  `per_telfn` int(10) NOT NULL,
  `per_areid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_programa_formacion`
--

CREATE TABLE `tbl_programa_formacion` (
  `pro_for_id` int(10) NOT NULL,
  `pro_for_nombr` varchar(100) NOT NULL,
  `pro_for_abrvtr` varchar(20) NOT NULL,
  `pro_for_tip_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_programa_formacion`
--

INSERT INTO `tbl_programa_formacion` (`pro_for_id`, `pro_for_nombr`, `pro_for_abrvtr`, `pro_for_tip_id`) VALUES
(16, 'ANALISIS Y DESARROLLO DE SISTEMA DE INFORMACION', 'ADSI', 33),
(17, 'weda', 'asdasd', 33),
(18, 'Telecomunicaciones', 'TLC', 33);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_sede`
--

CREATE TABLE `tbl_sede` (
  `sed_id` int(10) NOT NULL,
  `sed_nombr` varchar(50) NOT NULL,
  `sed_ciuid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_sede`
--

INSERT INTO `tbl_sede` (`sed_id`, `sed_nombr`, `sed_ciuid`) VALUES
(1, 'Centro Tecnológico Industrial ', 1),
(2, 'SALOMIA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_jornada`
--

CREATE TABLE `tbl_tipo_jornada` (
  `tip_jor_id` int(10) NOT NULL,
  `tip_jor_nombr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_tipo_jornada`
--

INSERT INTO `tbl_tipo_jornada` (`tip_jor_id`, `tip_jor_nombr`) VALUES
(1, 'DIURNA'),
(2, 'NOCTURNA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_oferta`
--

CREATE TABLE `tbl_tipo_oferta` (
  `tip_ofe_id` int(10) NOT NULL,
  `tip_ofe_nombr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_tipo_oferta`
--

INSERT INTO `tbl_tipo_oferta` (`tip_ofe_id`, `tip_ofe_nombr`) VALUES
(1, 'Me la pelas'),
(4, 'asdasasda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_programa`
--

CREATE TABLE `tbl_tipo_programa` (
  `tip_pro_id` int(10) NOT NULL,
  `tip_pro_nombr` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_tipo_programa`
--

INSERT INTO `tbl_tipo_programa` (`tip_pro_id`, `tip_pro_nombr`) VALUES
(33, 'Tecnologo'),
(34, 'Tecnico'),
(44, 'Especializacion2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_usuario`
--

CREATE TABLE `tbl_tipo_usuario` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_tipo_usuario`
--

INSERT INTO `tbl_tipo_usuario` (`id`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Aprendiz'),
(3, 'Instructor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `usu_id` int(10) NOT NULL,
  `usu_fot` varchar(50) NOT NULL,
  `usu_usuari` varchar(60) NOT NULL,
  `usu_passwd` varchar(32) NOT NULL,
  `usu_ficid` int(10) NOT NULL,
  `usu_perid` int(10) NOT NULL,
  `tipo_usuario_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`usu_id`, `usu_fot`, `usu_usuari`, `usu_passwd`, `usu_ficid`, `usu_perid`, `tipo_usuario_id`) VALUES
(2, '', 'Nemucraft28', '2549', 1, 1, 1),
(3, '', 'Negro', '2549', 1, 1, 2),
(4, '', 'Lewis', '2549', 1, 1, 3),
(6, '', 'Violet1234', '741a5d78d9afff472cc126905c61f224', 1, 1, 1);

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
  ADD KEY `are_sedid` (`are_sedid`);

--
-- Indices de la tabla `tbl_auditoria`
--
ALTER TABLE `tbl_auditoria`
  ADD PRIMARY KEY (`aud_id`),
  ADD KEY `aud_usuid` (`aud_usuid`),
  ADD KEY `aud_modid` (`aud_modid`);

--
-- Indices de la tabla `tbl_ciudad`
--
ALTER TABLE `tbl_ciudad`
  ADD PRIMARY KEY (`ciu_id`),
  ADD KEY `ciu_depid` (`ciu_depid`);

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
  ADD KEY `dep_paiid` (`dep_paiid`);

--
-- Indices de la tabla `tbl_estado`
--
ALTER TABLE `tbl_estado`
  ADD PRIMARY KEY (`est_id`);

--
-- Indices de la tabla `tbl_evento`
--
ALTER TABLE `tbl_evento`
  ADD PRIMARY KEY (`eve_id`);

--
-- Indices de la tabla `tbl_fases`
--
ALTER TABLE `tbl_fases`
  ADD PRIMARY KEY (`fas_id`);

--
-- Indices de la tabla `tbl_ficha`
--
ALTER TABLE `tbl_ficha`
  ADD PRIMARY KEY (`fic_id`),
  ADD KEY `tbl_ficha_ibfk_1` (`fic_pro_for_id`),
  ADD KEY `tbl_ficha_ibfk_2` (`fic_tip_jor_id`),
  ADD KEY `tbl_ficha_ibfk_3` (`fic_tip_ofe_id`),
  ADD KEY `tbl_ficha_ibfk_4` (`fic_mod_id`);

--
-- Indices de la tabla `tbl_foro`
--
ALTER TABLE `tbl_foro`
  ADD PRIMARY KEY (`foro_id`);

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
  ADD KEY `log_usuid` (`log_usuid`),
  ADD KEY `tbl_login_ibfk_1` (`log_ficid`);

--
-- Indices de la tabla `tbl_material`
--
ALTER TABLE `tbl_material`
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
-- Indices de la tabla `tbl_programa_formacion`
--
ALTER TABLE `tbl_programa_formacion`
  ADD PRIMARY KEY (`pro_for_id`),
  ADD KEY `tbl_programa_formacion_ibfk_1` (`pro_for_tip_id`);

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
  ADD KEY `sed_ciuid` (`sed_ciuid`);

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
  ADD KEY `tipo_usuario_id` (`tipo_usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_anuncio`
--
ALTER TABLE `tbl_anuncio`
  MODIFY `anu_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_area`
--
ALTER TABLE `tbl_area`
  MODIFY `are_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

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
  MODIFY `com_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tbl_departamento`
--
ALTER TABLE `tbl_departamento`
  MODIFY `dep_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_estado`
--
ALTER TABLE `tbl_estado`
  MODIFY `est_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbl_evento`
--
ALTER TABLE `tbl_evento`
  MODIFY `eve_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_fases`
--
ALTER TABLE `tbl_fases`
  MODIFY `fas_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `tbl_ficha`
--
ALTER TABLE `tbl_ficha`
  MODIFY `fic_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_foro`
--
ALTER TABLE `tbl_foro`
  MODIFY `foro_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tbl_inf_centr`
--
ALTER TABLE `tbl_inf_centr`
  MODIFY `inf_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `log_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT de la tabla `tbl_modalidad`
--
ALTER TABLE `tbl_modalidad`
  MODIFY `mod_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `per_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_programa_formacion`
--
ALTER TABLE `tbl_programa_formacion`
  MODIFY `pro_for_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tbl_responder`
--
ALTER TABLE `tbl_responder`
  MODIFY `res_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_sede`
--
ALTER TABLE `tbl_sede`
  MODIFY `sed_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_jornada`
--
ALTER TABLE `tbl_tipo_jornada`
  MODIFY `tip_jor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_oferta`
--
ALTER TABLE `tbl_tipo_oferta`
  MODIFY `tip_ofe_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_programa`
--
ALTER TABLE `tbl_tipo_programa`
  MODIFY `tip_pro_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_usuario`
--
ALTER TABLE `tbl_tipo_usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `usu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_area`
--
ALTER TABLE `tbl_area`
  ADD CONSTRAINT `tbl_area_ibfk_1` FOREIGN KEY (`are_sedid`) REFERENCES `tbl_sede` (`sed_id`);

--
-- Filtros para la tabla `tbl_ficha`
--
ALTER TABLE `tbl_ficha`
  ADD CONSTRAINT `tbl_ficha_ibfk_1` FOREIGN KEY (`fic_pro_for_id`) REFERENCES `tbl_programa_formacion` (`pro_for_id`),
  ADD CONSTRAINT `tbl_ficha_ibfk_2` FOREIGN KEY (`fic_tip_jor_id`) REFERENCES `tbl_tipo_jornada` (`tip_jor_id`),
  ADD CONSTRAINT `tbl_ficha_ibfk_3` FOREIGN KEY (`fic_tip_ofe_id`) REFERENCES `tbl_tipo_oferta` (`tip_ofe_id`),
  ADD CONSTRAINT `tbl_ficha_ibfk_4` FOREIGN KEY (`fic_mod_id`) REFERENCES `tbl_modalidad` (`mod_id`);

--
-- Filtros para la tabla `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD CONSTRAINT `tbl_login_ibfk_1` FOREIGN KEY (`log_ficid`) REFERENCES `tbl_ficha` (`fic_id`);

--
-- Filtros para la tabla `tbl_persona`
--
ALTER TABLE `tbl_persona`
  ADD CONSTRAINT `tbl_persona_ibfk_1` FOREIGN KEY (`per_areid`) REFERENCES `tbl_area` (`are_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
