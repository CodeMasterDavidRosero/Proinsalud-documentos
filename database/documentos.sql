-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-08-2022 a las 14:48:25
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
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `version` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha_elaboracion` date NOT NULL,
  `fecha_actualizacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_ultima_revision` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_publicacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `macroproceso` varchar(100) NOT NULL,
  `proceso` varchar(100) NOT NULL,
  `grupo` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `url` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id`, `codigo`, `version`, `nombre`, `fecha_elaboracion`, `fecha_actualizacion`, `fecha_ultima_revision`, `fecha_publicacion`, `macroproceso`, `proceso`, `grupo`, `usuario`, `url`) VALUES
(2, '9021203', '1', 'Matriz de ventas', '2022-07-13', '2022-07-13 05:00:00', '2022-07-25 05:22:05', '2022-07-14 04:51:53', 'Sistemas de gestión\r\n', 'Auditoria Asistencial\r\n', 'Procedimientos, instructivos, formatos, etc\r\n', 'Administrador', 'View/documentos/primer documento.docx'),
(3, '134548', '1', 'Funciones Programaticas', '2022-07-13', '2022-07-13 05:00:00', '2022-07-25 05:22:05', '2022-07-14 05:10:31', 'Gestión de servicios de aseguramiento', 'Coordinación Departamental', 'Procedimientos, instructivos, formatos, etc\r\n', 'Coordinador', 'View/documentos/segundo documento.docx'),
(4, '121513', '1', 'Cardex Principal', '2022-07-13', '2022-07-13 05:00:00', '2022-07-25 05:22:05', '2022-07-14 05:34:58', 'Gestión Financiera\r\n', 'Cartera\r\n', 'Procedimientos, instructivos, formatos, etc\r\n', 'Administrador', 'vistas/documentos/cardex_princila.xlsx'),
(5, '3107202211', '1', 'registro de Iglesias en Colombia', '2018-07-30', '2022-07-31 04:03:04', '2022-07-31 04:03:09', '2022-07-31 04:03:15', 'Procesos asistenciales\r\n', 'Procesos prioritarios\r\n', 'Procedimientos, instructivos, formatos, etc\r\n', '1', 'vistas/documentos/Procesos asistenciales/registro de iglesias en Colombia.xls'),
(6, '0208202208', '2', 'Nuevo Doc', '2022-08-02', '2022-08-02 05:57:34', '2022-08-02 05:57:34', '2022-08-02 05:57:34', 'Gestión de servicios de aseguramiento', 'Registro y Control', 'Procedimientos, instructivos, formatos, etc', '2', 'vista/documentos'),
(7, '2208020002', '1', 'Gestion Estrategica', '2022-08-02', '2022-08-02 07:01:06', '2022-08-02 07:01:06', '2022-08-02 07:01:06', 'Macro', 'Proceso', 'Grupo', '2', 'vista/documentos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
