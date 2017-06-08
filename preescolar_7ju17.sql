-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2017 a las 18:48:43
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `preescolar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombre_al` varchar(50) DEFAULT NULL,
  `apellido_al` varchar(50) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `sexo` varchar(30) DEFAULT NULL,
  `lugar_nacimiento` text,
  `padres` varchar(30) DEFAULT NULL,
  `gsa_id` int(11) DEFAULT NULL,
  `datos1_id` int(11) DEFAULT NULL,
  `datos2_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre_al`, `apellido_al`, `fecha_nac`, `sexo`, `lugar_nacimiento`, `padres`, `gsa_id`, `datos1_id`, `datos2_id`) VALUES
(1, 'kevin papilindon', 'acevedo', '2009-05-08', 'masculino', '     Maracay, Edo. Aragua.                             ', NULL, 1, 1, 2),
(2, 'diana', 'alahe', '2009-07-14', 'femenino', 'Maracay, Edo. Aragua.            ', NULL, 3, 3, 4),
(3, 'luger', 'arcila', '2009-05-13', 'masculino', 'Baruta, Edo. Miranda.            ', NULL, 23, 5, 6),
(4, 'jose', 'barragan', '2009-04-14', 'm', 'Maracay, Edo. Aragua.', 'lilianeth yosmar', 9, 15, 16),
(5, 'naiska', 'blanco', '2009-12-08', 'f', 'Maracay, Edo. Aragua.', 'carla julio', 12, 17, 18),
(6, 'edglimar', 'castellano', '2009-10-19', 'f', 'Maracay, Edo. Aragua.', NULL, 5, NULL, NULL),
(7, 'josneily', 'cisneros', '2009-07-05', 'f', 'San Carlos, Edo. Cojedes.', NULL, 10, NULL, NULL),
(8, 'cesar', 'espinosa', '2009-08-13', 'm', 'Maracay, Edo. Aragua.', NULL, 17, NULL, NULL),
(9, 'yhon', 'garcia', '2009-11-06', 'm', 'Maracay, Edo. Aragua.', NULL, 12, NULL, NULL),
(10, 'alejandro', 'gutierrez', '2009-04-20', 'm', 'Maracay, Edo. Aragua.', NULL, 23, NULL, NULL),
(12, 'jeison', 'guerrero', '2009-10-03', 'm', 'Maracay, Edo. Aragua.       ', NULL, 16, NULL, NULL),
(13, 'abraham', 'lopez', '2009-07-27', 'm', 'Maracay, Edo. Aragua.            ', NULL, 7, NULL, NULL),
(14, 'jkgj', 'mhjghj', '0000-00-00', 'm', '       jfh     ', 'hhhhh', NULL, NULL, NULL),
(15, ' d cks ', 'jk cs ', '0000-00-00', 'm', '            kjbfcksd', 'ks dkc', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anios_grados`
--

CREATE TABLE `anios_grados` (
  `id` int(11) NOT NULL,
  `grados_id` int(11) DEFAULT NULL,
  `anios_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `anios_grados`
--

INSERT INTO `anios_grados` (`id`, `grados_id`, `anios_id`) VALUES
(1, 6, 1),
(2, 6, 1),
(3, 7, 1),
(4, 5, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anio_escolar`
--

CREATE TABLE `anio_escolar` (
  `id` int(11) NOT NULL,
  `anio` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `anio_escolar`
--

INSERT INTO `anio_escolar` (`id`, `anio`) VALUES
(1, '2016-2017'),
(2, '2017-2018'),
(3, '2018-2019'),
(4, '2019-2020'),
(5, '2020-2021');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `cedula` int(11) DEFAULT NULL,
  `nombre_re` varchar(30) DEFAULT NULL,
  `apellido_re` varchar(30) DEFAULT NULL,
  `telefono_1` varchar(30) DEFAULT NULL,
  `telefono_2` varchar(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `estatus` varchar(20) DEFAULT NULL,
  `estados_id` int(11) DEFAULT NULL,
  `municipios_id` int(11) DEFAULT NULL,
  `parroquias_id` int(11) DEFAULT NULL,
  `direccion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `cedula`, `nombre_re`, `apellido_re`, `telefono_1`, `telefono_2`, `email`, `estatus`, `estados_id`, `municipios_id`, `parroquias_id`, `direccion`) VALUES
(1, 13553614, 'gustavo', 'acevedo', '04123434919', '02432675294', 'gustavoacevedo24@gmail.com', NULL, 1, 10, 1, NULL),
(2, 18490320, 'neilly', 'sanchez', NULL, NULL, NULL, NULL, 1, 10, 2, NULL),
(3, 12170190, 'yuleny', 'ochoa', NULL, NULL, NULL, NULL, 1, 10, 3, NULL),
(4, 15130921, 'arnaldo', 'alahe', NULL, NULL, NULL, NULL, 1, 10, 4, NULL),
(5, 17577629, 'deiglis', 'sanchez', NULL, NULL, NULL, NULL, 1, 10, 5, NULL),
(6, 12611496, 'luger', 'arcila', NULL, NULL, NULL, NULL, 1, 10, 6, NULL),
(15, 15084387, 'Lilianets', 'Figueroa', NULL, NULL, NULL, NULL, 1, 10, 7, NULL),
(16, 10754370, 'yosmar', 'barragan', NULL, NULL, NULL, NULL, 1, 10, 8, NULL),
(17, 12612323, 'carla', 'herrera', NULL, NULL, NULL, NULL, 1, 10, 9, NULL),
(18, 13769232, 'julio', 'blanco', '7867', '767867', 'jghkhgk', '', 1, 10, 15, 'calle jon'),
(19, 415, 'Papilindon', 'Sinverguenzon', '555-rriente', '555-mer', 'kevinacevedosanchez@gmail.com', 'docente', 1, 10, 62, 'fila 15, sector O, casa N° 02                                 '),
(20, 0, '', '', '', '', 'hola', 'docente', 1, 10, 11, '                        ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id` int(11) NOT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `municipio_id` int(11) DEFAULT NULL,
  `parroquia_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`id`, `estado_id`, `municipio_id`, `parroquia_id`) VALUES
(1, 1, 10, 1),
(2, 1, 10, 2),
(3, 1, 10, 3),
(4, 1, 10, 4),
(5, 1, 10, 5),
(6, 1, 10, 6),
(7, 1, 10, 7),
(8, 1, 10, 8),
(9, 1, 10, 9),
(10, 1, 10, 10),
(11, 1, 10, 11),
(12, 1, 10, 12),
(13, 1, 10, 13),
(14, 1, 10, 14),
(15, 1, 10, 15),
(16, 1, 10, 16),
(17, 1, 10, 17),
(18, 1, 10, 18),
(19, 1, 10, 19),
(20, 1, 10, 20),
(21, 1, 10, 21),
(22, 1, 10, 22),
(23, 1, 10, 23),
(24, 1, 10, 24),
(25, 1, 10, 25),
(26, 2, 37, NULL),
(27, 1, 38, NULL),
(28, 1, 39, NULL),
(29, NULL, 40, NULL),
(30, 2, 42, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` int(11) NOT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `estadoseo` varchar(50) DEFAULT NULL,
  `estado3` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `estado`, `estadoseo`, `estado3`) VALUES
(1, 'Aragua', 'aragua', 'ARG'),
(2, 'Carabobo', 'carabobo', 'CAR'),
(3, 'Miranda', 'miranda', 'MIR'),
(4, 'Cojedes', 'cojedes', 'COJ'),
(5, 'Amazonas ', 'amazonas ', 'AMZ'),
(6, 'Apure', 'apure', 'APU'),
(7, 'Anzoategui', 'anzuategui', 'ANZ'),
(8, 'Barinas', 'barinas', 'BAR'),
(9, 'Bolivar', 'bolivar', 'BOL'),
(10, 'Delta-Amacuro', 'delta-amacuro', 'DAM'),
(11, 'Dependencias-Federales', 'dependencias-federales', 'DFE'),
(12, 'Distrito-Capital', 'distrito-capital', 'DCA'),
(13, 'Falcon', 'falcon', 'FAL'),
(14, 'Lara', 'lara', 'LAR'),
(15, 'Merida', 'merida', 'MER'),
(16, 'Monagas', 'monagas', 'MON'),
(17, 'Nueva-Esparta', 'nueva-esparta', 'NES'),
(18, 'Portuguesa', 'portuguesa', 'POR'),
(19, 'Sucre', 'sucre', 'SUC'),
(20, 'Tachira', 'tachira', 'TAC'),
(21, 'Trujillo', 'trujillo', 'TRU'),
(22, 'Vargas', 'vargas', 'VAR'),
(23, 'Yaracuy', 'yaracuy', 'YAR'),
(24, 'Zulia', 'zulia', 'ZUL'),
(25, 'Guarico', 'guarico', 'GUA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados`
--

CREATE TABLE `grados` (
  `id` int(11) NOT NULL,
  `grado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grados`
--

INSERT INTO `grados` (`id`, `grado`) VALUES
(1, 'primer grado'),
(2, 'segundo grado'),
(3, 'tercer grado'),
(5, 'cuarto grado'),
(6, 'maternal'),
(7, 'sexto grado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado_seccion_anio`
--

CREATE TABLE `grado_seccion_anio` (
  `id` int(11) NOT NULL,
  `grado_id` int(11) DEFAULT NULL,
  `seccion_id` int(11) DEFAULT NULL,
  `anio_id` int(11) DEFAULT NULL,
  `gsa` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grado_seccion_anio`
--

INSERT INTO `grado_seccion_anio` (`id`, `grado_id`, `seccion_id`, `anio_id`, `gsa`) VALUES
(1, 1, 1, 1, '1a17'),
(2, 1, 1, 2, '1a16'),
(3, 1, 2, 1, '1b17'),
(4, 1, 2, 2, '1b16'),
(5, 1, 3, 1, '1c17'),
(6, 1, 3, 2, '1c16'),
(7, 1, 4, 1, '1d17'),
(8, 1, 4, 2, '1d16'),
(9, 2, 1, 1, '2a17'),
(10, 2, 1, 2, '2a16'),
(11, 2, 2, 1, '2b17'),
(12, 2, 2, 2, '2b16'),
(13, 2, 3, 1, '2c17'),
(14, 2, 3, 2, '2c16'),
(15, 2, 4, 1, '2d17'),
(16, 2, 4, 2, '2d16'),
(17, 3, 1, 1, '3a17'),
(18, 3, 1, 2, '3a16'),
(19, 3, 2, 1, '3b17'),
(20, 3, 2, 2, '3b16'),
(21, 3, 3, 1, '3c17'),
(22, 3, 3, 2, '3c16'),
(23, 3, 4, 1, '3d17'),
(24, 3, 4, 2, '3d16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id` int(11) NOT NULL,
  `estados_id` int(11) DEFAULT NULL,
  `municipio` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id`, `estados_id`, `municipio`) VALUES
(1, 1, 'Mario Briceño Iragorry'),
(2, 1, 'Santiago Mariño'),
(3, 1, 'Girardot'),
(4, 1, 'Tovar '),
(5, 1, 'Costa de Oro'),
(6, 1, 'Jose Angel Lamas'),
(7, 1, 'Sucre'),
(8, 1, 'Bolivar'),
(9, 1, 'Linares Alcántara'),
(10, 1, 'Libertador'),
(11, 1, 'Jose Felix Ribas'),
(12, 1, 'Jose Rafael Revenga'),
(13, 1, 'Santos Michelena'),
(14, 1, 'Zamora '),
(15, 1, 'San Sebastian'),
(16, 1, 'San Casimiro'),
(17, 1, 'Camatagua'),
(18, 1, 'Urdaneta'),
(22, 2, 'Juan José Mora'),
(23, 2, 'Puerto Cabello'),
(24, 2, 'Naguanagua'),
(25, 2, 'Bejuma'),
(26, 2, 'Montalban'),
(27, 2, 'Miranda'),
(28, 2, 'Libertador'),
(29, 2, 'Valencia'),
(30, 2, 'Carlos Arvelo'),
(31, 2, 'San Diego'),
(32, 2, 'Guacara'),
(33, 2, 'Los Guayos'),
(34, 2, 'San Joaquín'),
(35, 2, 'Diego Ibarra'),
(37, 2, 'peñalo'),
(38, 1, 'La pepa'),
(39, 3, 'la loca'),
(40, NULL, 'joder'),
(41, NULL, 'perro'),
(42, NULL, 'nada'),
(43, NULL, 'loco'),
(44, NULL, 'ahora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parroquias`
--

CREATE TABLE `parroquias` (
  `id` int(11) NOT NULL,
  `municipios_id` int(11) DEFAULT NULL,
  `parroquia` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parroquias`
--

INSERT INTO `parroquias` (`id`, `municipios_id`, `parroquia`) VALUES
(1, 10, 'Barrio Carlos Andrés Pérez'),
(2, 10, 'Barrio Ezequiel Zamora'),
(3, 10, 'Barrio La Frontera'),
(4, 10, 'Barrio Mata Verde'),
(5, 10, 'Barrio Ocumarito Norte'),
(6, 10, 'Centro La Pica'),
(7, 10, '	Malariología Antonio Aranguren'),
(8, 10, 'Sector 10 de Diciembre'),
(9, 10, 'Sector 1ro de Mayo'),
(10, 10, 'Sector Bello Monte'),
(11, 10, 'Sector El Triángulo'),
(12, 10, 'Sector La Carrizalera'),
(13, 10, 'Sector La Cuarta'),
(14, 10, 'Sector La Frontera'),
(15, 10, 'Sector La Quinta'),
(16, 10, 'Sector Las animas I'),
(17, 10, 'Sector Las animas II'),
(18, 10, 'Sector Las Vegas'),
(19, 10, 'Sector Los Hornos I'),
(20, 10, 'Sector Los Hornos II'),
(21, 10, 'Sector Los Hornos III'),
(22, 10, 'Sector Los Hornos IV'),
(23, 10, 'Sector Los Hornos V'),
(24, 10, 'Sector Los Hornos VI'),
(25, 10, 'Sector Los Hornos VII'),
(26, 10, 'Sector Los Hornos VIII'),
(27, 10, 'Sector Los Hornos IX'),
(28, 10, 'Sector Los Hornos X'),
(29, 10, 'Sector Los Mangos'),
(30, 10, 'Sector Los Naranjos'),
(31, 10, 'Sector Ocumarito'),
(32, 10, 'Sector San Martín'),
(33, 10, 'Sector Santa Rosalía'),
(34, 10, 'Urbanización Cuatricentenario'),
(35, 10, 'Urbanización El Encanto'),
(36, 10, 'Urbanización El Orticeño'),
(37, 10, 'Urbanización La Esperanza'),
(38, 10, 'Urbanización La Macarena I'),
(39, 10, 'Urbanización Los Libertadores'),
(40, 10, 'Urbanización Los Lirios'),
(41, 10, 'Urbanización Palo Negro I'),
(42, 10, '	Urbanización Palo Negro II'),
(43, 10, 'Urbanización San Miguel'),
(44, 10, 'Urbanización Santa Rosalía'),
(45, 10, 'Barrio Libertador'),
(46, 10, 'Barrio Los Hornos'),
(47, 10, 'Barrio Los Ruices'),
(48, 10, 'Barrio Santa Ana'),
(49, 10, 'Base Aérea Libertador'),
(50, 10, 'Centro Palo Negro'),
(51, 10, 'Hacienda La Coromoto'),
(52, 10, 'Sector 8'),
(53, 10, 'Sector Camburito'),
(54, 10, 'Sector El Jaral'),
(55, 10, 'Sector La Atascosa'),
(56, 10, 'Sector La Granja Coromoto'),
(57, 10, 'Sector Las Malvinas'),
(58, 10, 'Sector Los Jabillos'),
(59, 10, 'Urbanización Araguaney'),
(60, 10, 'Urbanización Bael'),
(61, 10, 'Urbanización La Blanquera'),
(62, 10, 'Urbanización La Croquera'),
(63, 10, 'Urbanización La Ovallera'),
(64, 10, 'Urbanización Las Trinitarias'),
(65, 10, 'Urbanización Los Robles'),
(66, 10, 'Urbanización Los Tulipanes'),
(67, 10, 'Urbanización San Antonio'),
(69, NULL, 'nalgas'),
(70, NULL, 'tres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE `secciones` (
  `id` int(11) NOT NULL,
  `seccion` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`id`, `seccion`) VALUES
(1, 'a'),
(2, 'b'),
(3, 'c'),
(4, 'd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gsa_id` (`gsa_id`),
  ADD KEY `datos_id` (`datos1_id`),
  ADD KEY `datos2_id` (`datos2_id`);

--
-- Indices de la tabla `anios_grados`
--
ALTER TABLE `anios_grados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grado_id` (`grados_id`),
  ADD KEY `anio_id` (`anios_id`);

--
-- Indices de la tabla `anio_escolar`
--
ALTER TABLE `anio_escolar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idestado` (`estados_id`),
  ADD KEY `idmunicipio` (`municipios_id`),
  ADD KEY `idparroquia` (`parroquias_id`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idparroquia` (`parroquia_id`),
  ADD KEY `idestado` (`estado_id`),
  ADD KEY `idmunicipio` (`municipio_id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estado3` (`estado3`);

--
-- Indices de la tabla `grados`
--
ALTER TABLE `grados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grado_seccion_anio`
--
ALTER TABLE `grado_seccion_anio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grado_id` (`grado_id`),
  ADD KEY `seccion_id` (`seccion_id`),
  ADD KEY `anio_id` (`anio_id`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estados_id` (`estados_id`);

--
-- Indices de la tabla `parroquias`
--
ALTER TABLE `parroquias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ciudad_municipio_id` (`municipios_id`);

--
-- Indices de la tabla `secciones`
--
ALTER TABLE `secciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `anios_grados`
--
ALTER TABLE `anios_grados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `anio_escolar`
--
ALTER TABLE `anio_escolar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `grados`
--
ALTER TABLE `grados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `grado_seccion_anio`
--
ALTER TABLE `grado_seccion_anio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT de la tabla `parroquias`
--
ALTER TABLE `parroquias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT de la tabla `secciones`
--
ALTER TABLE `secciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_4` FOREIGN KEY (`gsa_id`) REFERENCES `grado_seccion_anio` (`id`),
  ADD CONSTRAINT `alumnos_ibfk_5` FOREIGN KEY (`datos1_id`) REFERENCES `datos` (`id`),
  ADD CONSTRAINT `alumnos_ibfk_6` FOREIGN KEY (`datos2_id`) REFERENCES `datos` (`id`);

--
-- Filtros para la tabla `anios_grados`
--
ALTER TABLE `anios_grados`
  ADD CONSTRAINT `anios_grados_ibfk_1` FOREIGN KEY (`grados_id`) REFERENCES `grados` (`id`),
  ADD CONSTRAINT `anios_grados_ibfk_2` FOREIGN KEY (`anios_id`) REFERENCES `anio_escolar` (`id`);

--
-- Filtros para la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `direccion_ibfk_1` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id`);

--
-- Filtros para la tabla `grado_seccion_anio`
--
ALTER TABLE `grado_seccion_anio`
  ADD CONSTRAINT `grado_seccion_anio_ibfk_1` FOREIGN KEY (`grado_id`) REFERENCES `grados` (`id`),
  ADD CONSTRAINT `grado_seccion_anio_ibfk_2` FOREIGN KEY (`seccion_id`) REFERENCES `secciones` (`id`),
  ADD CONSTRAINT `grado_seccion_anio_ibfk_3` FOREIGN KEY (`anio_id`) REFERENCES `anio_escolar` (`id`);

--
-- Filtros para la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD CONSTRAINT `municipios_estados_FK` FOREIGN KEY (`estados_id`) REFERENCES `estados` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `parroquias`
--
ALTER TABLE `parroquias`
  ADD CONSTRAINT `parroquias_municipios_FK` FOREIGN KEY (`municipios_id`) REFERENCES `municipios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
