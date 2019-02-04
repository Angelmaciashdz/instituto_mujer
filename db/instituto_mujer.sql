-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-02-2019 a las 04:22:09
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `instituto_mujer`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio`
--

CREATE TABLE `domicilio` (
  `id_domicilio` int(4) NOT NULL,
  `calle` varchar(100) DEFAULT NULL,
  `num_exterior` varchar(6) DEFAULT NULL,
  `num_int` varchar(6) DEFAULT NULL,
  `calle1` varchar(100) DEFAULT NULL,
  `calle2` varchar(100) DEFAULT NULL,
  `barrio` varchar(100) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `domicilio`
--

INSERT INTO `domicilio` (`id_domicilio`, `calle`, `num_exterior`, `num_int`, `calle1`, `calle2`, `barrio`, `estado`) VALUES
(236, 'la rosa', '22', NULL, 'bugambilia', 'clavel', 'el tetel', 1),
(237, 'la rosa', '29', NULL, '12', 'lomas', 'teco', 1),
(238, 'hidalgo', '56', NULL, '87ggg', '777b', 'san jose', 1),
(239, 'alams', '12', NULL, 'laurel', 'bosques', 'la conchita', 1),
(240, 'asdasd', '14', NULL, 'asdasd', 'asda', 'la conchita', 1),
(241, 'las torres', '55', NULL, 'donceles ', 'alwjandria', 'la condesa', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id_galeria` int(4) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `id_programa` int(4) DEFAULT NULL,
  `fecha_ingreso` datetime DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id_galeria`, `imagen`, `id_programa`, `fecha_ingreso`, `estado`) VALUES
(1, 'reposteria1.jpg', 2, NULL, 1),
(2, 'reposteria2.jpg', 2, NULL, 1),
(3, 'reposteria3.jpg', 2, NULL, 1),
(4, 'reposteria4.jpg', 2, NULL, 1),
(5, 'reposteria5.jpg', 2, NULL, 1),
(6, 'reposteria6.jpg', 2, NULL, 1),
(7, 'corte1.jpg', 1, '2018-06-13 00:00:00', 1),
(8, 'corte2.jpg', 1, '2018-06-15 00:00:00', 1),
(9, 'corte0.jpg', NULL, NULL, NULL),
(10, 'corte3.jpg', NULL, NULL, NULL),
(11, 'corte4.jpg', NULL, NULL, NULL),
(12, 'corte5.jpg', NULL, NULL, NULL),
(13, 'corte6.jpg', NULL, NULL, NULL),
(14, 'aparatos1.jpg', NULL, NULL, NULL),
(15, 'aparatos2.jpg', NULL, NULL, NULL),
(16, 'aparatos3.jpg', NULL, NULL, NULL),
(17, 'aparatos4.jpg', NULL, NULL, NULL),
(18, 'aparatos5.jpg', NULL, NULL, NULL),
(19, 'aparatos6.jpg', NULL, NULL, NULL),
(20, '31224128_223669051717034_2327269531606581248_n.jpg', 4, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id_persona` int(4) NOT NULL,
  `folio_persona` varchar(20) DEFAULT NULL,
  `paterno` varchar(50) DEFAULT NULL,
  `materno` varchar(50) DEFAULT NULL,
  `nombres` varchar(60) DEFAULT NULL,
  `edad` int(4) DEFAULT NULL,
  `curp` varchar(30) DEFAULT NULL,
  `ine` varchar(30) DEFAULT NULL,
  `id_domicilio` int(4) DEFAULT NULL,
  `id_programa` int(4) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `usuario` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_persona`, `folio_persona`, `paterno`, `materno`, `nombres`, `edad`, `curp`, `ine`, `id_domicilio`, `id_programa`, `telefono`, `fecha_ingreso`, `usuario`) VALUES
(146, NULL, 'Macias', 'Hernandez', 'Guadalupe Angel', 35, 'mahg900802hmccrd07', 'mchrgd90080215h600', 236, 16, '5515926657', '2018-09-25', NULL),
(147, NULL, 'López', 'Perez', 'Maria Angela', 34, 'mahg900802hmccrd07', 'MCHRGD90080215F600', 237, 2, '5524277602', '2018-09-25', NULL),
(148, NULL, 'Perez', 'lopez', 'Juana', 55, 'Mahg900802hmccrd09', 'MCHRGD90080215H100', 238, 4, '5515926657', '2018-10-03', NULL),
(150, NULL, 'Mendez', 'Cruz', 'roberta', 44, 'MHAG090909HMCCRD06', 'MCHRGD90080215H500', 239, 17, '5514908833', '2018-10-03', NULL),
(152, NULL, 'lara ', 'lara', 'juan', 23, 'MHAG090909HMCCRD67', 'MCHRGD90080215H208', 241, 58, '5515926656', '2018-10-12', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `id_programa` int(4) NOT NULL,
  `folio_programa` varchar(10) DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  `programa` varchar(50) DEFAULT NULL,
  `tipo_programa` int(4) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_termina` date NOT NULL,
  `imparte` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`id_programa`, `folio_programa`, `imagen`, `programa`, `tipo_programa`, `fecha_inicio`, `fecha_termina`, `imparte`) VALUES
(1, '2017-001', 'corte.png', 'CABELLO Y PEINADO', 1, '2018-07-05', '2018-07-05', 'estetica  lupita'),
(2, '2017-002', 'reposteria.png', 'REPOSTERIA', 1, '2018-05-24', '2018-05-28', 'panadería el francés'),
(3, '2017-003', 'globos.png', 'DECORACION GLOBOS', 1, '2018-05-18', '2018-05-18', 'panadería el francés'),
(4, '2017-004', 'pintura2.png', 'PINTURA TEXTIL', 1, '2018-05-18', '2018-05-18', 'panadería el francés'),
(5, '2017-005', 'chocolateria.png', 'CHOCOLATERIA', 1, '2018-05-18', '2018-05-18', 'panadería el francés'),
(6, '2017-006', 'apar2.png', 'APARATOS AUDITIVOS', 1, '2018-05-18', '2018-05-20', 'comoaudi'),
(15, '2017-007', 'bordado.jpg', 'BORDADO DE LISTON', 1, '2018-09-20', '0000-00-00', 'mercería dani'),
(16, '2017-008', 'pisos.jpg', 'PISOS Y  AZULEJOS', 2, '2018-06-14', '2018-06-14', 'Construrama'),
(17, '2017-009', 'huerto.png', 'HUERTO FAMILIAR', 1, '2018-07-17', '2018-07-17', 'Martin Gutierrez'),
(18, '2017-010', 'reciclado2.png', 'PRODUCTO RECICLADO', 2, '2018-07-25', '2018-07-25', 'ecología ambiental'),
(19, '2017-011', 'futuro.png', 'FUTURO EN GRANDE', 1, '2018-07-25', '2018-07-25', 'Emprendedores de México'),
(54, '2017-012', 'CF6.jpg', 'TECNOLOGÍA', 1, '2018-09-19', '2018-09-27', 'Softeck'),
(55, '2017-013', '18.jpg', 'EMPRENDIMIENTO EMPRESARIAL', 2, '2018-09-03', '2018-10-26', 'Banco santander'),
(58, '2017-014', 'admini.jpg', 'ADMINISTRACIÓN', 2, '2018-09-10', '2018-09-28', 'Banco santander'),
(59, '2017-015', 'liderazgo.jpg', 'LIDERAZGO 1', 1, '2018-09-24', '2018-09-28', 'Emprendedores de México'),
(63, '2017-016', 'refo.jpg', 'REFORESTACION', 1, '2018-10-08', '2018-10-26', 'ecología ambiental'),
(65, '2017-017', 'comp.jpg', 'Computacion', 2, '2018-12-03', '2018-12-28', 'MSoft');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id_publicacion` int(4) NOT NULL,
  `tipo` int(4) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `texto` text,
  `link` text,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id_publicacion`, `tipo`, `titulo`, `imagen`, `texto`, `link`, `estado`) VALUES
(1, 1, 'La violencia contra la mujer no es un fenómeno nuevo', 'mujer_maltratada.jpg', 'Un miembro del talibán golpea a una mujer en Kabul, la capital Afganistán, por quitarse la burka en público.\r\nViolencia contra la mujer es la que se ejerce por su condición de mujer. Siendo ésta «consecuencia de la discriminación que sufre tanto en leyes como en la práctica, y la persistencia de desigualdades por razones de género».1?\r\n\r\nEn esta violencia se presentan numerosas facetas que van desde la discriminación y el menosprecio hasta la agresión física, sexual, verbal o psicológica y el asesinato, manifestándose en diversos ámbitos de la vida social , laboral y política, entre los que se encuentran la propia familia, la escuela, la Iglesia, el Estado, entre otras.2?\r\n\r\nEn 1993, en asamblea general, las Naciones Unidas (ONU) aprobaron la Declaración sobre la eliminación de la violencia contra la mujer, y en 1999, a propuesta de la República Dominicana con el apoyo de 60 países más, declararon el 25 de noviembre Día Internacional de la Eliminación de la Violencia contra la Mujer.\r\n\r\n\r\n\r\n', 'https://es.wikipedia.org/wiki/Violencia_contra_la_mujer', 1),
(2, 1, 'Las 15 jóvenes emprendedoras más innovadoras del mundo', 'a1.png', 'Cuando se habla de un/a emprendedor/a en serie, la verdad es que no piensas que tenga 25 años. Piensas más en alguien de 40, como poco. Liz Wessel, fundadora de WayUp, una plataforma para buscar prácticas y empleo a universitarios, montó antes dos negocios, cuando todavía estaba en la universidad. ¿Qué puso en marcha? Un sistema de descuentos para estudiantes en restaurantes locales (UniEats) y un servicio que buscaba a evangelistas de grandes marcas entre los estudiantes de un campus (Campus Reps).\r\n\r\nCuando pones esto en un curriculum, lo normal es que termines trabajando en Google, lo que ocurrió. Pero Google no consiguió retener a Wessel.', 'http://www.emprendedores.es/casos-de-exito/mujeres-empresarias-exito', 1),
(10, 1, 'Las 15 jóvenes emprendedoras más innovadoras del mundo', 'a1.png', 'Cuando se habla de un/a emprendedor/a en serie, la verdad es que no piensas que tenga 25 años. Piensas más en alguien de 40, como poco. Liz Wessel, fundadora de WayUp, una plataforma para buscar prácticas y empleo a universitarios, montó antes dos negocios, cuando todavía estaba en la universidad. ¿Qué puso en marcha? Un sistema de descuentos para estudiantes en restaurantes locales (UniEats) y un servicio que buscaba a evangelistas de grandes marcas entre los estudiantes de un campus (Campus Reps).\r\n\r\nCuando pones esto en un curriculum, lo normal es que termines trabajando en Google, lo que ocurrió. Pero Google no consiguió retener a Wessel.', 'http://www.emprendedores.es/casos-de-exito/mujeres-empresarias-exito', 1),
(11, 1, 'La violencia contra la mujer no es un fenómeno nuevo', 'mujer_maltratada.jpg', 'Un miembro del talibán golpea a una mujer en Kabul, la capital Afganistán, por quitarse la burka en público.\r\nViolencia contra la mujer es la que se ejerce por su condición de mujer. Siendo ésta «consecuencia de la discriminación que sufre tanto en leyes como en la práctica, y la persistencia de desigualdades por razones de género».1?\r\n\r\nEn esta violencia se presentan numerosas facetas que van desde la discriminación y el menosprecio hasta la agresión física, sexual, verbal o psicológica y el asesinato, manifestándose en diversos ámbitos de la vida social , laboral y política, entre los que se encuentran la propia familia, la escuela, la Iglesia, el Estado, entre otras.2?\r\n\r\nEn 1993, en asamblea general, las Naciones Unidas (ONU) aprobaron la Declaración sobre la eliminación de la violencia contra la mujer, y en 1999, a propuesta de la República Dominicana con el apoyo de 60 países más, declararon el 25 de noviembre Día Internacional de la Eliminación de la Violencia contra la Mujer.\r\n\r\n\r\n\r\n', 'https://es.wikipedia.org/wiki/Violencia_contra_la_mujer', 2),
(27, 1, 'MUJERES EMPRENDEDORAS – 30 CASOS DE ÉXITO EN EL MUNDO', 'hedley-and-bennett.png', 'Ellen Marie Bennett trabajaba como cocinera en Bäco Mercat, un reputado restaurante en Los Ángeles, cuando se dio cuenta que había una importante necesidad en el mercado que no estaba siendo cubierta por ninguna empresa; me refiero, específicamente, a la falta de prendas cool para los entusiastas de la cocina.\r\nCon un enfoque fresco, creativo y artesanal, Ellen comenzó a hacer mandiles para vender entre sus colegas. Posteriormente, utilizó sus fines de semana para montarse en mercaditos creativos', 'http://www.themonopolitan.com/2017/09/mujeres-emprendedoras-30-casos-de-exito-en-el-mundo/', 2),
(28, 1, 'MUJERES EMPRENDEDORAS – 30 CASOS DE ÉXITO EN EL MUNDO', 'hedley-and-bennett.png', 'Ellen Marie Bennett trabajaba como cocinera en Bäco Mercat, un reputado restaurante en Los Ángeles, cuando se dio cuenta que había una importante necesidad en el mercado que no estaba siendo cubierta por ninguna empresa; me refiero, específicamente, a la falta de prendas cool para los entusiastas de la cocina.\r\nCon un enfoque fresco, creativo y artesanal, Ellen comenzó a hacer mandiles para vender entre sus colegas. Posteriormente, utilizó sus fines de semana para montarse en mercaditos creativos', 'http://www.themonopolitan.com/2017/09/mujeres-emprendedoras-30-casos-de-exito-en-el-mundo/', 1),
(115, 3, NULL, 'mujer1.jpg', NULL, NULL, 1),
(116, 3, NULL, 'mujer2.png', NULL, NULL, 1),
(117, 3, NULL, 'mari.jpg', NULL, NULL, 1),
(118, 3, NULL, 'm1.jpg', NULL, NULL, 1),
(140, 2, '¿Por qué necesitamos más mujeres emprendedoras? | Marta Cruz | TEDxUTN', NULL, NULL, 'emprendedoras.mp4', 1),
(148, 2, 'Consejos para mujeres emprendedoras en América Latina', NULL, NULL, 'Latina.mp4', 1),
(149, 2, 'Foro Mujeres Poderosas 2017 - “Las 10 lecciones que toda mujer poderosa debe saber”', NULL, NULL, 'poderosas.mp4', 1),
(150, 2, 'Mujeres emprendedoras: Creando oportunidades - FoCo14 México', NULL, NULL, 'mecp.mp4', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_programa`
--

CREATE TABLE `tipo_programa` (
  `id_tipo` int(4) NOT NULL,
  `tipo` varchar(15) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_programa`
--

INSERT INTO `tipo_programa` (`id_tipo`, `tipo`, `estado`) VALUES
(1, 'ordinario', 1),
(2, 'especial', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_public`
--

CREATE TABLE `tipo_public` (
  `id_tipo_public` int(4) NOT NULL,
  `tipo_public` varchar(10) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_public`
--

INSERT INTO `tipo_public` (`id_tipo_public`, `tipo_public`, `estado`) VALUES
(1, 'textual', 1),
(2, 'video', 1),
(3, 'imagen', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(4) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `tipo` int(3) DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `email`, `nombre_usuario`, `tipo`, `imagen`, `password`, `estado`) VALUES
(1, 'juan carlos', 'mac24her@gmail.com', 'angel123macias', 1, NULL, '62C8AD0A15D9D1CA38D5DEE762A16E01', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  ADD PRIMARY KEY (`id_domicilio`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id_galeria`),
  ADD KEY `programa` (`id_programa`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id_persona`),
  ADD KEY `id_domicilio` (`id_domicilio`),
  ADD KEY `id_programa` (`id_programa`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`id_programa`),
  ADD KEY `tipo_programa` (`tipo_programa`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id_publicacion`),
  ADD KEY `tipo` (`tipo`);

--
-- Indices de la tabla `tipo_programa`
--
ALTER TABLE `tipo_programa`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `tipo_public`
--
ALTER TABLE `tipo_public`
  ADD PRIMARY KEY (`id_tipo_public`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  MODIFY `id_domicilio` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id_galeria` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id_persona` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `id_programa` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id_publicacion` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT de la tabla `tipo_programa`
--
ALTER TABLE `tipo_programa`
  MODIFY `id_tipo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_public`
--
ALTER TABLE `tipo_public`
  MODIFY `id_tipo_public` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD CONSTRAINT `galeria_ibfk_1` FOREIGN KEY (`id_programa`) REFERENCES `programa` (`id_programa`);

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_ibfk_1` FOREIGN KEY (`id_domicilio`) REFERENCES `domicilio` (`id_domicilio`),
  ADD CONSTRAINT `personas_ibfk_2` FOREIGN KEY (`id_programa`) REFERENCES `programa` (`id_programa`),
  ADD CONSTRAINT `personas_ibfk_3` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `programa`
--
ALTER TABLE `programa`
  ADD CONSTRAINT `programa_ibfk_1` FOREIGN KEY (`tipo_programa`) REFERENCES `tipo_programa` (`id_tipo`);

--
-- Filtros para la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `publicaciones_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tipo_public` (`id_tipo_public`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
