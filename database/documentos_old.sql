-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2022 a las 08:14:54
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
  `nombre_carpeta` text COLLATE utf8_spanish_ci NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `carpetas`
--

INSERT INTO `carpetas` (`id`, `nombre_carpeta`, `menu_id`) VALUES
(1, 'Procedimientos, instructivos, formatos, etc', 1),
(2, 'Procedimientos, instructivos, formatos, etc\r\n', 2),
(3, 'Procedimientos, instructivos, formatos, etc\r\n', 3),
(4, 'Procedimientos, instructivos, formatos, etc\r\n', 4),
(5, 'Procedimientos, instructivos, formatos, etc\r\n', 5),
(6, 'Procedimientos, instructivos, formatos, etc\r\n', 6),
(7, 'Procedimientos, instructivos, formatos, etc\r\n', 7),
(8, 'Procedimientos, instructivos, formatos, etc\r\n', 8),
(9, 'Procedimientos, instructivos, formatos, etc\r\n', 9),
(10, 'Procedimientos, instructivos, formatos, etc\r\n', 10),
(11, 'TS, HOS, URG, UCIN, ETC, SST\r\n', 10),
(12, 'RMPN, REPOC, ETC\r\n', 10),
(13, 'Procedimientos, instructivos, formatos, etc\r\n', 11),
(14, 'Procedimientos, instructivos, formatos, etc\r\n', 12);

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
  `fecha_ultima_revision` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_publicacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `macroproceso` text NOT NULL,
  `proceso` text NOT NULL,
  `grupo` text NOT NULL,
  `usuario` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id`, `codigo`, `version`, `nombre`, `fecha_elaboracion`, `fecha_actualizacion`, `fecha_ultima_revision`, `fecha_publicacion`, `macroproceso`, `proceso`, `grupo`, `usuario`, `url`) VALUES
(10, '202208020809', '1', 'Nuevo Texto', '2022-08-02', '2022-08-02 15:37:00', '2022-08-02 15:37:00', '2022-08-02 15:37:00', '3', '3', '3', '1', 'vista/documentos'),
(12, '202208030812', '2', 'Nuevo Texto XLS', '2022-08-02', '2022-08-03 00:53:57', '2022-08-03 00:53:57', '2022-08-03 00:53:57', '5', '5', '5', '1', 'vista/documentos'),
(13, '202208030838', '2', 'Nuevo doc 2022', '2022-08-02', '2022-08-03 04:55:59', '2022-08-03 04:55:59', '2022-08-03 04:55:59', '1', '3', '11', '3', 'vista/documentos'),
(14, '202208030849', '15', 'Guia de Atención al Paciente', '2022-08-03', '2022-08-03 05:02:26', '2022-08-03 05:02:26', '2022-08-03 05:02:26', '10', '4', '10', '3', 'vista/documentos'),
(15, '202208030852', '1', 'Documento uno', '2022-08-03', '2022-08-03 05:17:34', '2022-08-03 05:17:34', '2022-08-03 05:17:34', '10', '10', '10', '3', 'vista/documentos/'),
(16, '202208030849', '3', 'documento 2', '2022-08-03', '2022-08-03 05:18:18', '2022-08-03 05:18:18', '2022-08-03 05:18:18', '10', '10', '10', '3', 'vista/documentos/');

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
(1, 'Direccionamiento Estratégico'),
(2, 'Sistemas de gestión'),
(3, 'Gestión jurídica y asuntos empresariales'),
(4, 'Docencia y servicio'),
(5, 'Gestión de servicios de aseguramiento'),
(6, 'Gestión Financiera'),
(7, 'Gestión de Recursos de la Información'),
(8, 'Gestión de Recursos Físicos'),
(9, 'Gestión de Recursos Humanos'),
(10, 'Procesos asistenciales'),
(11, 'Procesos de apoyo'),
(12, 'Rol Administrador');

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
(3, 'Gestión Calidad', 2),
(4, 'SIAU', 2),
(5, 'Seguridad del paciente', 2),
(6, 'Auditoría Asistencial', 2),
(7, 'Gestión Ambiental', 2),
(8, 'Seguridad y Salud en el trabajo', 2),
(9, 'Gestión jurídica y asuntos empresariales', 3),
(10, 'Docencia y servicio', 4),
(11, 'Coodinación Departamental', 5),
(12, 'Coordinación Municipios', 5),
(13, 'Referencia - Contrarreferencia', 5),
(14, 'Cuentas Médicas', 5),
(15, 'Registro y Control', 5),
(16, 'Contabilidad', 6),
(17, 'Cartera', 6),
(18, 'Pagaduría', 6),
(19, 'Facturación', 6),
(20, 'Compras', 6),
(21, 'Suministros', 6),
(22, 'Costos', 6),
(23, 'Sistemas', 7),
(24, 'Estadística', 7),
(25, 'Gestión Documental', 7),
(26, 'Mantenimiento Biométrico e infraestructura', 8),
(27, 'Investigación, Desarrollo E Innovación', 8),
(28, 'Apoyo Logístico', 8),
(29, 'Gestión de Recursos Humanos', 9),
(30, 'Procesos prioritarios', 10),
(31, 'Rutas integrales de atención en Salud', 10),
(32, 'Vigilancia epidemiológica', 10),
(33, 'Guías de práctica clínica', 10),
(34, 'Procesos (SF, BPM, BPE, LAB, IMAG, CITAS)', 10),
(35, 'Citas', 11),
(36, 'IEC', 11),
(84, 'Roles Administrativo', 12);

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
(1, 'David Fernando Rosero Guerrero', 'DRosero', 'C.C.', 87217075, '317-844-4099', '1984-01-07', 'indefinido', '2019-08-05', '$2a$07$asxx54ahjppf45sd87a5auZIOFA3CPrv0GKOOoFpxzHmfN6.LwpF.', 'SuperAdmin', '1', 'vistas/img/usuarios/David Rosero/500.jpg', 1, '2022-08-03 00:43:20', '2022-08-03 00:43:25'),
(2, 'Alejandro Fernandez', 'AlejoFer', 'C.C.', 123456789, '314-505-4444', '2001-01-31', 'Horas', '2021-09-10', '$2a$07$asxx54ahjppf45sd87a5auZIOFA3CPrv0GKOOoFpxzHmfN6.LwpF.', 'Administrador', '1', 'vistas/img/usuarios/AlejoFer/500.png', 1, '2022-08-01 23:49:12', '2022-08-03 00:43:26'),
(3, 'Lorena Patricia Narvaez', 'LoreNarvaez', 'C.C.', 1085246058, '31478440568', '2022-06-26', 'Horas', '2022-06-26', '$2a$07$asxx54ahjppf45sd87a5auZIOFA3CPrv0GKOOoFpxzHmfN6.LwpF.', 'Coordinador', '10', 'vistas/img/usuarios/LoreNarvaez/762.jpg', 1, '2022-08-03 00:16:47', '2022-08-03 00:16:47'),
(7, 'Santiago Andres Paz Oquendo', 'SPaz', 'RUT', 1878431, '3134557879', '2022-06-28', 'Horas', '2022-06-28', '$2a$07$asxx54ahjppf45sd87a5auZIOFA3CPrv0GKOOoFpxzHmfN6.LwpF.', 'Coordinador', '5', 'vistas/img/usuarios/Aremlp/479.png', 1, '2022-08-02 22:25:16', '2022-08-02 22:25:16');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `macros`
--
ALTER TABLE `macros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `procesos`
--
ALTER TABLE `procesos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
