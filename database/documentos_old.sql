-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-08-2022 a las 16:42:48
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
  `fecha_ultima_revision` date NOT NULL DEFAULT current_timestamp(),
  `fecha_publicacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `macroproceso` text NOT NULL,
  `proceso` text NOT NULL,
  `grupo` text NOT NULL,
  `usuario` text NOT NULL,
  `url` text NOT NULL,
  `ciclo` text NOT NULL,
  `origen` text NOT NULL,
  `vista` text NOT NULL,
  `relacionados` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id`, `codigo`, `version`, `nombre`, `fecha_elaboracion`, `fecha_actualizacion`, `fecha_ultima_revision`, `fecha_publicacion`, `macroproceso`, `proceso`, `grupo`, `usuario`, `url`, `ciclo`, `origen`, `vista`, `relacionados`) VALUES
(51, '202208090855', '1', 'DocumentoNuevoPDF', '2022-08-09', '2022-08-09 18:48:35', '2022-08-09', '2022-08-09 18:48:35', '2', '1', '10', '1', 'vistas/documentos/proinsalud/DocumentoNuevoPDF/IMPUESTOS_CARRO_2018.pdf', '', '', '', ''),
(52, '202208090811', '1', 'Documento PDF nueva Ruta', '2022-08-09', '2022-08-09 18:56:41', '2022-08-09', '2022-08-09 18:56:41', '1', '1', '10', '1', 'vistas/documentos/Documento PDF nueva Ruta/IMPUESTOS CARRO 2018.pdf', '', '', '', ''),
(53, '202208090801', '1', 'nuevo Documento', '2022-08-09', '2022-08-09 19:13:36', '2022-08-09', '2022-08-09 19:13:36', '1', '1', '10', '1', 'vistas/documentos/nuevo Documento/Guia TLS 1.2 (1).pdf', '', '', '', ''),
(55, '202208090833', '1', 'NuevaRuta', '2022-08-09', '2022-08-09 21:23:50', '2022-08-09', '2022-08-09 21:23:50', '1', '1', '10', '1', 'vistas/documentos/carta laboral.pdf', '', '', '', ''),
(56, '202208090816', '1', 'NuevaRuta', '2022-08-09', '2022-08-09 21:25:06', '2022-08-09', '2022-08-09 21:25:06', '2', '2', '10', '1', 'vistas/documentos/carta laboral.pdf', '', '', '', ''),
(57, '202208090807', '1', 'NuevaRutas', '2022-08-09', '2022-08-09 21:26:34', '2022-08-09', '2022-08-09 21:26:34', '1', '1', '10', '1', 'vistas/documentos/carta_laboral.pdf', '', '', '', ''),
(58, '202208090828', '1', 'NuevaDoc', '2022-08-09', '2022-08-09 21:43:46', '2022-08-09', '2022-08-09 21:43:46', '1', '1', '10', '1', 'vistas/documentos/CARTA LABORAL K.pdf', '', '', '', ''),
(59, '202208090846', '1', 'Otro doc', '2022-08-09', '2022-08-09 21:47:34', '2022-08-09', '2022-08-09 21:47:34', '5', '2', '10', '1', 'vistas/documentos/HV DAVID ROSERO 2022 C.docx', '', '', '', ''),
(60, '202208090836', '1', 'DocNuevo', '2022-08-09', '2022-08-09 21:57:03', '2022-08-09', '2022-08-09 21:57:03', '1', '1', '10', '1', 'vistas/documentos/FORMATO DE CAPACITACIÓN PRUEBAS UNITARIAS.pdf', '', '', '', ''),
(61, '202208120811', '1', 'Documento Pdf', '2022-08-01', '2022-08-12 03:33:34', '2022-08-11', '2022-08-12 03:33:34', '1', '1', '10', '1', 'vistas/documentos/26. Nuevo Formato Relación otros contratos estatales.pdf', '', '', '', ''),
(62, '202208170832', '1', 'Nuevo Documento y formulario', '2022-07-31', '2022-08-17 14:26:35', '2022-08-17', '2022-08-17 14:26:35', '2', '1', '10', '1', 'vistas/documentos/TU_Autorizacion Documento_Proceso de Seleccion David Rosero_1660140818-f-f.pdf', 'P', 'I', '0', 'Historias Clinicas'),
(63, '202208170831', '1', 'Nuevo Doc', '2022-08-01', '2022-08-17 14:38:52', '2022-08-17', '2022-08-17 14:38:52', '2', '2', '10', '1', 'vistas/documentos/6. Cetificado a Salud.pdf', 'V', 'E', '1', 'Con Seguridad Hospitalaria');

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
(1, 'David Fernando Rosero Guerrero', 'DRosero', 'C.C.', 87217075, '317-844-4099', '1984-01-07', 'indefinido', '2019-08-05', '$2a$07$asxx54ahjppf45sd87a5auZIOFA3CPrv0GKOOoFpxzHmfN6.LwpF.', 'SuperAdmin', '1', 'vistas/img/usuarios/David Rosero/500.jpg', 1, '2022-08-16 18:01:38', '2022-08-16 18:01:38'),
(2, 'Alejandro Fernandez', 'AlejoFer', 'C.C.', 123456789, '314-505-4444', '2001-01-31', 'Horas', '2021-09-10', '$2a$07$asxx54ahjppf45sd87a5auZIOFA3CPrv0GKOOoFpxzHmfN6.LwpF.', 'Administrador', '1', 'vistas/img/usuarios/AlejoFer/500.png', 1, '2022-08-04 13:05:41', '2022-08-04 13:05:41'),
(3, 'Lorena Patricia Narvaez', 'LoreNarvaez', 'C.C.', 1085246058, '31478440568', '2022-06-26', 'Horas', '2022-06-26', '$2a$07$asxx54ahjppf45sd87a5auZIOFA3CPrv0GKOOoFpxzHmfN6.LwpF.', 'Coordinador', '10', 'vistas/img/usuarios/LoreNarvaez/762.jpg', 1, '2022-08-03 00:16:47', '2022-08-03 00:16:47'),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `macros`
--
ALTER TABLE `macros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `procesos`
--
ALTER TABLE `procesos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
