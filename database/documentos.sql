-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2022 a las 03:02:34
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.21

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
  `fecha_actualizacion` date NOT NULL,
  `fecha_ultima_revision` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fecha_publicacion` timestamp NULL DEFAULT NULL,
  `macroproceso` varchar(100) NOT NULL,
  `proceso` varchar(100) NOT NULL,
  `grupo` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `url` varchar(1024) NOT NULL,
  `estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id`, `codigo`, `version`, `nombre`, `fecha_elaboracion`, `fecha_actualizacion`, `fecha_ultima_revision`, `fecha_publicacion`, `macroproceso`, `proceso`, `grupo`, `usuario`, `url`, `estado`) VALUES
(2, '9021203', '1', 'Matriz de ventas', '2022-07-13', '2022-07-13', '2022-07-14 00:06:41', '2022-07-13 23:51:53', 'Sistemas de gestión\r\n', 'Auditoria Asistencial\r\n', 'Procedimientos, instructivos, formatos, etc\r\n', 'Administrador', 'View/documentos/primer documento.docx', '1'),
(3, '134548', '1', 'Funciones Programaticas', '2022-07-13', '2022-07-13', '2022-07-14 00:10:31', '2022-07-14 00:10:31', 'Gestión de servicios de aseguramiento', 'Coordinación Departamental', 'Procedimientos, instructivos, formatos, etc\r\n', 'Coordinador', 'View/documentos/segundo documento.docx', '1'),
(4, '121513', '1', 'Cardex Principal', '2022-07-13', '2022-07-13', '2022-07-14 00:34:58', '2022-07-14 00:34:58', 'Gestión Financiera\r\n', 'Cartera\r\n', 'Procedimientos, instructivos, formatos, etc\r\n', 'Administrador', 'vistas/documentos/cardex_princila.xlsx', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(1, 'Administrador', 'admin', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Administrador', 'vistas/img/usuarios/admin/191.jpg', 1, '2022-07-13 19:30:45', '2022-07-14 00:30:45'),
(57, 'Juan Fernando Urrego', 'juan', '$2a$07$asxx54ahjppf45sd87a5auwRi.z6UsW7kVIpm0CUEuCpmsvT2sG6O', 'Vendedor', 'vistas/img/usuarios/juan/461.jpg', 1, '2017-12-21 12:07:24', '2017-12-21 17:07:24'),
(58, 'Julio Gómez', 'julio', '$2a$07$asxx54ahjppf45sd87a5auQhldmFjGsrgUipGlmQgDAcqevQZSAAC', 'Especial', 'vistas/img/usuarios/julio/100.png', 1, '2017-12-21 12:07:39', '2017-12-21 17:07:39'),
(59, 'Ana Gonzalez', 'ana', '$2a$07$asxx54ahjppf45sd87a5auLd2AxYsA/2BbmGKNk2kMChC3oj7V0Ca', 'Vendedor', 'vistas/img/usuarios/ana/260.png', 1, '2017-12-21 12:07:47', '2017-12-21 17:07:47');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
