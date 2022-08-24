-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-08-2022 a las 08:44:42
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `documentos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carpetas`
--

CREATE TABLE `carpetas` (
  `id` int(11) NOT NULL,
  `nombre_carpeta` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `carpetas`
--

INSERT INTO `carpetas` (`id`, `nombre_carpeta`) VALUES
(1, 'Procedimiento'),
(2, 'Formato'),
(3, 'Guía de práctica clínica'),
(4, 'Protocolo'),
(5, 'Instructivo'),
(6, 'Manual'),
(7, 'Ruta'),
(8, 'Caracterización\r\n'),
(9, 'Programa'),
(10, 'Política'),
(11, 'Resolución'),
(12, 'Otro\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL,
  `codigo` text NOT NULL,
  `version` text NOT NULL,
  `nombre` text NOT NULL,
  `fecha_elaboracion` date NOT NULL,
  `fecha_actualizacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_ultima_revision` date NOT NULL,
  `fecha_publicacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `macroproceso` text NOT NULL,
  `proceso` text NOT NULL,
  `grupo` text NOT NULL,
  `usuario` text NOT NULL,
  `url` text NOT NULL,
  `ciclo` text NOT NULL,
  `origen` text NOT NULL,
  `vista` text NOT NULL,
  `pclaves` text NOT NULL,
  `relacionados` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id`, `codigo`, `version`, `nombre`, `fecha_elaboracion`, `fecha_actualizacion`, `fecha_ultima_revision`, `fecha_publicacion`, `macroproceso`, `proceso`, `grupo`, `usuario`, `url`, `ciclo`, `origen`, `vista`, `pclaves`, `relacionados`) VALUES
(67, '156456F-32', '3', 'Documento cinco', '2022-08-23', '2022-08-24 03:47:11', '2022-08-24', '2022-08-24 03:47:11', '1', '1', '10', '1', 'vistas/documentos/trazabilidad.pdf', 'Verificar', '1', '2', 'gerEstra', 'Fisio-02'),
(68, 'Ser45-G32', '1', 'Documento Dos', '2022-07-31', '2022-08-24 04:10:20', '2022-08-23', '2022-08-24 04:10:20', '1', '2', '1', '1', 'vistas/documentos/SIHTAC1.pdf', 'Hacer', '1', '1', 'GerPro', 'Fision-02'),
(69, 'DAfads-44', '1', 'Documento tres', '2022-07-31', '2022-08-24 04:21:16', '2022-08-23', '2022-08-24 04:21:16', '9', '29', '2', '1', 'vistas/documentos/5.1.4.4 Packet Tracer - Identify MAC and IP Addresses Instructions IG.pdf', 'Actuar', '1', '1', 'Trampolín', 'FISPM-33'),
(70, '15165FA-32', '3', 'documento cinco', '2022-07-31', '2022-08-24 06:34:38', '2022-08-24', '2022-08-24 06:34:38', '2', '4', '1', '1', 'vistas/documentos/5.1.4.4 Packet Tracer - Identify MAC and IP Addresses Instructions IG.pdf', 'Verificar', '1', '2', 'cinco', 'FIVE-55'),
(71, 'FADSF-1545', '1', 'Documento 6', '2022-07-31', '2022-08-24 06:35:40', '2022-08-24', '2022-08-24 06:35:40', '8', '31', '6', '1', 'vistas/documentos/5.1.4.4 Packet Tracer - Identify MAC and IP Addresses Instructions IG.pdf', 'Actuar', '2', '1', 'Radiografias', 'RADS-91'),
(72, 'Man11-45', '1', 'Docuemento siete', '2022-07-31', '2022-08-24 06:37:15', '2022-08-24', '2022-08-24 06:37:15', '14', '57', '6', '1', 'vistas/documentos/5.1.4.4 Packet Tracer - Identify MAC and IP Addresses Instructions IG (1).pdf', 'Hacer', '1', '2', 'Manuel Informático', 'Man-44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `macros`
--

CREATE TABLE `macros` (
  `id` int(11) NOT NULL,
  `nombre_macro` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `macros`
--

INSERT INTO `macros` (`id`, `nombre_macro`) VALUES
(1, 'Gestión estratégica'),
(2, 'Sistemas de gestión'),
(3, 'Gestión jurídica y asuntos empresariales'),
(4, 'Gestión clínica'),
(5, 'Servicios ambulatorios'),
(6, 'Rutas integrales de atención'),
(7, 'Urgencias'),
(8, 'Ayudas diagnosticas'),
(9, 'Servicio Farmacéutico'),
(10, 'Servicio hospitalario y extensión hospitalaria'),
(11, 'Gestión de servicios de aseguramiento'),
(12, 'Gestión financiera'),
(13, 'Gestión de recursos físicos'),
(14, 'Gestión de sistemas de información');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos`
--

CREATE TABLE `procesos` (
  `id` int(11) NOT NULL,
  `nombre_proceso` varchar(100) NOT NULL,
  `menu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `procesos`
--

INSERT INTO `procesos` (`id`, `nombre_proceso`, `menu_id`) VALUES
(1, 'Gerencia', 1),
(2, 'Control Interno', 1),
(3, 'Calidad', 2),
(4, 'Gestión Ambiental', 2),
(5, 'Seguridad y salud en el trabajo', 2),
(6, 'SIAU', 2),
(7, 'Jurídica', 3),
(8, 'Auditoria asistencial', 4),
(9, 'Seguridad del paciente', 4),
(10, 'Vigilancia epidemiológica', 4),
(11, 'Citas', 5),
(12, 'Consulta externa', 5),
(13, 'Quimioterapia', 5),
(14, 'Odontología', 5),
(15, 'Promoción y mantenimiento de la salud', 6),
(16, 'Ruta alteraciones nutricionales (SAN - obesidad)', 6),
(17, 'Ruta de alteraciones y trastornos de la salud bucal', 6),
(18, 'Ruta de alteraciones y trastornos visuales', 6),
(19, 'Ruta de alternaciones y trastornos de la audición y comunicación', 6),
(20, 'Ruta de Cáncer', 6),
(21, 'Ruta de enfermedades huérfanas', 6),
(22, 'Ruta de enfermedades infecciosas', 6),
(23, 'Ruta de enfermedades zoonóticas', 6),
(24, 'Ruta de Promoción y mantenimiento de la salud', 6),
(25, 'Ruta de Salud Mental (PSM - Violencia - SPA)', 6),
(26, 'Ruta enfermedades crónicas (CNT-EPOC)', 6),
(27, 'Ruta Materno Perinatal', 6),
(28, 'Ruta trastornos degenerativos neuropatías y enfermedades autoinmunes', 6),
(29, 'Urgencias', 7),
(30, 'TAB', 7),
(31, 'Imagenología', 8),
(32, 'Laboratorio', 8),
(33, 'Servicio farmacéutico', 9),
(34, 'Central de mezclas', 9),
(35, 'Hospitalización', 10),
(36, 'Home Care', 10),
(37, 'UCIA', 10),
(38, 'UCIN', 10),
(39, 'Quirófano', 10),
(40, 'Medicina laboral', 11),
(41, 'Coordinación de municipios', 11),
(42, 'Habilitación', 11),
(43, 'Registro y control', 11),
(44, 'Referencia', 11),
(45, 'Cuentas médicas', 11),
(46, 'Gestión de red', 11),
(47, 'Compras', 12),
(48, 'Suministros', 12),
(49, 'Contabilidad', 12),
(50, 'Costos', 12),
(51, 'Cartera', 12),
(52, 'Facturación', 12),
(53, 'Pagaduría', 12),
(54, 'Mantenimiento y apoyo logístico', 13),
(55, 'Sistemas', 14),
(56, 'Estadística', 14),
(57, 'Gestión documental e historias clínicas', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `tipodoc` text COLLATE utf8_spanish_ci NOT NULL,
  `numident` int(60) NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `fechanac` date NOT NULL,
  `contrato` text COLLATE utf8_spanish_ci NOT NULL,
  `fecingreso` date NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `roles` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `tipodoc`, `numident`, `telefono`, `fechanac`, `contrato`, `fecingreso`, `password`, `perfil`, `roles`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(1, 'David Fernando Rosero Guerrero', 'DRosero', 'C.C.', 87217075, '317-844-4099', '1984-01-07', 'indefinido', '2019-08-05', '$2a$07$asxx54ahjppf45sd87a5auZIOFA3CPrv0GKOOoFpxzHmfN6.LwpF.', 'SuperAdmin', '1', 'vistas/img/usuarios/David Rosero/500.jpg', 1, '2022-08-23 21:32:18', '2022-08-23 21:32:18'),
(7, 'Santiago Andres Paz Oquendo', 'SPaz', 'RUT', 1878431, '3134557879', '2022-06-28', 'Horas', '2022-06-28', '$2a$07$asxx54ahjppf45sd87a5auZIOFA3CPrv0GKOOoFpxzHmfN6.LwpF.', 'Coordinador', '5', 'vistas/img/usuarios/Aremlp/479.png', 1, '2022-08-03 17:47:35', '2022-08-09 11:38:41');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carpetas`
--
ALTER TABLE `carpetas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `macros`
--
ALTER TABLE `macros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `procesos`
--
ALTER TABLE `procesos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carpetas`
--
ALTER TABLE `carpetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `macros`
--
ALTER TABLE `macros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `procesos`
--
ALTER TABLE `procesos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
