-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-07-2013 a las 01:28:01
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `testvocacional`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `idarea` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`idarea`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`idarea`, `area`, `descripcion`) VALUES
(1, 'AREA1', 'Arte y Creatividad'),
(2, 'AREA2', 'Ciencias Sociales'),
(3, 'AREA3', 'Económica, Administrativa y Financiera'),
(4, 'AREA4', 'Ciencia y Tecnología'),
(5, 'AREA5', 'Ciencias Ecológicas, Biológicas y de Salud');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalletest`
--

CREATE TABLE IF NOT EXISTS `detalletest` (
  `idtest` int(11) NOT NULL,
  `idpregunta` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  KEY `idtest` (`idtest`),
  KEY `idpregunta` (`idpregunta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE IF NOT EXISTS `especialidad` (
  `idespecialidad` int(11) NOT NULL AUTO_INCREMENT,
  `especialidad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `idarea` int(11) NOT NULL,
  PRIMARY KEY (`idespecialidad`),
  KEY `idarea` (`idarea`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=56 ;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`idespecialidad`, `especialidad`, `idarea`) VALUES
(1, 'diseño grafico', 1),
(2, 'locucion y publicidad', 1),
(3, 'produccion audiovisual', 1),
(4, 'radio y television', 1),
(5, 'cine y video', 1),
(6, 'diseño de modas', 1),
(7, 'artes plasticas', 1),
(8, 'teatro', 1),
(9, 'psicologia', 2),
(10, 'idiomas', 2),
(11, 'historia y geografia', 2),
(12, 'periodismo', 2),
(13, 'derecho', 2),
(14, 'sociologia', 2),
(15, 'arqueologia', 2),
(16, 'hoteleria y turismo', 2),
(17, 'educacion', 2),
(18, 'antropologia', 2),
(19, 'relaciones internacionales', 2),
(20, 'administracion de empresas', 3),
(21, 'contabilidad', 3),
(22, 'gestion y negocios internacionales', 3),
(23, 'comercio exterior ', 3),
(24, 'ciencias empresariales', 3),
(25, 'ingenieria comercial', 3),
(26, 'banca y finanzas', 3),
(27, 'ingenieria de sistemas', 4),
(28, 'ingenieria civil', 4),
(29, 'arquitectura', 4),
(30, 'electronica', 4),
(31, 'ingenieria mecatronica', 4),
(32, 'ingenieria industrial', 4),
(33, 'ingenieria ambiental', 4),
(34, 'ingenieria agronoma ', 4),
(35, 'ingenieria de minas', 4),
(36, 'fisica', 4),
(37, 'matematicas', 4),
(38, 'ingenieria estadistica', 4),
(39, 'petroleo y metalurgia', 4),
(40, 'astronomia', 4),
(41, 'carreras militares', 4),
(42, 'biologia', 5),
(43, 'farmacia', 5),
(44, 'veterinaria', 5),
(45, 'medicina humana', 5),
(46, 'obstetricia', 5),
(47, 'odontologia', 5),
(48, 'enfermeria', 5),
(49, 'ingenieria de alimentos', 5),
(50, 'biotecnologia', 5),
(51, 'ingenieria mecanica', 4),
(52, 'mecanica', 4),
(53, 'nutricionista', 5),
(54, 'ingenieria pesquera', 5),
(55, 'fisiologia', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulante`
--

CREATE TABLE IF NOT EXISTS `postulante` (
  `idpostulante` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`idpostulante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE IF NOT EXISTS `preguntas` (
  `idpregunta` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `idarea` int(11) NOT NULL,
  PRIMARY KEY (`idpregunta`),
  KEY `idarea` (`idarea`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=82 ;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`idpregunta`, `pregunta`, `idarea`) VALUES
(1, 'Seleccionar, capacitar y motivar al personal de una organización/empresa', 1),
(2, 'Tocar un instrumento y componer música', 1),
(3, 'Diseñar logotipos y portadas de una revista', 1),
(4, 'Pintar, hacer esculturas, ilustrar libros de arte, etcétera.', 1),
(5, 'Prepararse para ser modelo profesional.', 1),
(6, 'Diseñar juegos interactivos electrónicos para computadora', 1),
(7, 'Redactar guiones y libretos para un programa de televisión', 1),
(8, 'Crear campañas publicitarias', 1),
(9, 'Rediseñar y decorar espacios físicos en viviendas, oficinas y locales comerciales', 1),
(10, 'Diseñar ropa para niños, jóvenes y adultos', 1),
(11, 'Restaurar piezas y obras de arte', 1),
(12, 'Fotografiar hechos históricos, lugares significativos, rostros, paisajes para el área publicitaria, artística, periodística y social', 1),
(13, 'Ser parte de un grupo de teatro', 1),
(14, 'Producir cortometrajes, spots publicitarios, programas educativos, de ficción, etcétera.', 1),
(15, 'Decorar jardines de casas y parques públicos.', 1),
(16, 'Trabajar como presentador de televisión, locutor de radio y televisión, animador de programas culturales y concursos', 1),
(17, 'Realizar excavaciones para descubrir restos del pasado', 2),
(18, 'Organizar eventos y atender a sus asistentes', 2),
(19, 'Defender a clientes individuales o empresas en juicios de diferente naturaleza.', 2),
(20, 'Investigar las causas y efectos de los trastornos emocionales', 2),
(21, 'Escribir artículos periodísticos, cuentos, novelas y otros.', 2),
(22, 'Estudiar la diversidad cultural en el ámbito rural y urbano', 2),
(23, 'Gestionar y evaluar convenios internacionales de cooperación para el desarrollo social.', 2),
(24, 'Gestionar y evaluar proyectos de desarrollo en una institución educativa y/o fundación.', 2),
(25, 'Estudiar idiomas extranjeros –actuales y antiguos- para hacer traducción.', 2),
(26, 'Enseñar a niños de 0 a 5 años', 2),
(27, 'Tratar a niños, jóvenes y adultos con problemas psicológicos.', 2),
(28, 'Diseñar programas educativos para niños con discapacidad.', 2),
(29, 'Trabajar en museos y bibliotecas nacionales e internacionales.', 2),
(30, 'Conocer las distintas religiones, su filosofía y transmitirlas a la comunidad en general', 2),
(31, 'Estudiar grupos étnicos, sus costumbres , tradiciones, cultura y compartir sus vivencias.', 2),
(32, 'Diseñar y ejecutar programas de turismo.', 2),
(34, 'Seleccionar, capacitar y motivar al personal de una organización/empresa', 3),
(35, 'Planificar cuáles son las metas de una organización pública o privada a mediano y largo plazo.', 3),
(36, 'Controlar ingresos y egresos de fondos y presentar el balance final de una institución.', 3),
(37, 'Hacer propuestas y formular estrategias para aprovechar las relaciones económicas entre dos países.', 3),
(38, 'Elaborar campañas para introducir un nuevo producto al mercado.', 3),
(39, 'Supervisar las ventas de un centro comercial', 3),
(40, 'Aconsejar a las personas sobre planes de ahorro e inversiones.', 3),
(41, 'Tener un negocio propio de tipo comercial.', 3),
(42, 'Organizar un plan de distribución y venta de un gran almacén.', 3),
(43, 'Administrar una empresa de turismo y/o agencias de viaje.', 3),
(44, 'Investigar y/o sondear nuevos mercados.', 3),
(45, 'Crear estrategias de promoción y venta de nuevos productos ecuatorianos en el mercado internacional.', 3),
(46, 'Administrar una empresa (familiar, privada o pública)', 3),
(47, 'Asistir a directivos de multinacionales con manejo de varios idiomas.', 3),
(48, 'Asesorar a inversionistas en la compra de bienes/acciones en mercados nacionales e internacionales.', 3),
(49, 'Organizar, planificar y administrar centros educativos', 3),
(50, 'Diseñar programas de computación y explorar nuevas aplicaciones tecnológicas para uso del internet.', 4),
(51, 'Resolver problemas de cálculo para construir un puente.', 4),
(52, 'Diseñar y planificar la producción masiva de artículos como muebles,\nautos, equipos de oficina, empaques y envases para alimentos y otros.', 4),
(53, 'Concebir planos para viviendas, edificios y ciudadelas.', 4),
(54, 'Investigar y probar nuevos productos farmacéuticos.', 4),
(55, 'Diseñar máquinas que puedan simular actividades humanas.', 4),
(56, 'Elaborar mapas, planos e imágenes para el estudio y análisis de datos geográficos.', 4),
(57, 'Dedicarse a fabricar productos alimenticios de consumo masivo', 4),
(58, 'Manejar y/o dar mantenimiento a dispositivos/aparatos tecnológicos en aviones, barcos, radares,  etcétera ', 4),
(59, 'Revisar y dar mantenimiento a artefactos eléctricos, electrónicos y computadoras.', 4),
(60, 'T rabajar en una empresa petrolera en un cargo técnico como control de la producción.', 4),
(61, 'Tener un taller de reparación y mantenimiento de carros, tractores,  etcétera ', 4),
(62, 'Ejecutar proyectos de extracción minera y metalúrgica.', 4),
(63, 'Aplicar conocimientos de estadística en investigaciones en diversas áreas (social, administrativa, salud,  etcétera .)', 4),
(64, 'Explorar el espacio sideral, los planetas , características y componentes.', 4),
(65, 'Administrar y ordenar (planificar) adecuadamente la ocupación del espacio físico de ciudades, países etc., utilizando imágenes de satélite, mapas.', 4),
(66, 'Criar, cuidar y tratar animales domésticos y de campo', 5),
(67, 'Investigar sobre áreas verdes, medio ambiente y cambios climáticos', 5),
(68, 'Diseñar cursos para enseñar a la gente sobre temas de salud e higiene', 5),
(69, 'Atender la salud de personas enfermas.', 5),
(70, 'Hacer experimentos con plantas (frutas, árboles, flores)', 5),
(71, 'Examinar y tratar los problemas visuales', 5),
(72, 'Atender y realizar ejercicios a personas que tienen limitaciones físicas, problemas de lenguaje, etcétera.', 5),
(73, 'Realizar el control de calidad de los alimentos', 5),
(74, 'Trabajar investigando la reproducción de peces, camarones y otros animales marinos.', 5),
(75, 'Aplicar métodos alternativos a la medicina tradicional para atender personas con dolencias de diversa índole.', 5),
(76, 'Investigar organismos vivos para elaborar vacunas.', 5),
(77, 'Atender la salud dental de las personas', 5),
(78, 'Planificar y recomendar dietas para personas diabéticas y/o con sobrepeso.', 5),
(79, 'Estudiar la influencia entre las corrientes marinas y el clima y sus consecuencias ecológicas.', 5),
(80, 'Mejorar la imagen facial y corporal de las personas aplicando diferentes técnicas.', 5),
(81, 'Administrar y renovar menúes de comidas en un hotel o restaurante.', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta_especialidad`
--

CREATE TABLE IF NOT EXISTS `pregunta_especialidad` (
  `idpregunta` int(11) NOT NULL,
  `idespecialidad` int(11) NOT NULL,
  KEY `idpregunta` (`idpregunta`),
  KEY `idespecialidad` (`idespecialidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pregunta_especialidad`
--

INSERT INTO `pregunta_especialidad` (`idpregunta`, `idespecialidad`) VALUES
(1, 4),
(1, 8),
(1, 9),
(2, 2),
(2, 5),
(3, 6),
(3, 1),
(4, 7),
(5, 9),
(6, 3),
(6, 5),
(6, 4),
(7, 4),
(7, 8),
(7, 5),
(8, 2),
(8, 1),
(8, 3),
(9, 6),
(10, 6),
(11, 7),
(12, 5),
(12, 3),
(13, 8),
(14, 5),
(15, 6),
(16, 2),
(16, 4),
(17, 18),
(17, 15),
(18, 12),
(18, 16),
(18, 19),
(18, 23),
(19, 13),
(20, 9),
(21, 12),
(21, 17),
(22, 14),
(22, 17),
(23, 19),
(23, 22),
(23, 23),
(24, 20),
(24, 25),
(25, 10),
(26, 17),
(27, 9),
(28, 17),
(29, 14),
(29, 11),
(30, 14),
(31, 11),
(31, 15),
(32, 16),
(34, 9),
(34, 24),
(35, 20),
(35, 22),
(35, 24),
(36, 21),
(37, 23),
(38, 25),
(39, 20),
(41, 20),
(42, 20),
(42, 26),
(43, 20),
(43, 24),
(44, 22),
(45, 25),
(46, 20),
(47, 23),
(48, 26),
(50, 27),
(51, 28),
(51, 29),
(52, 32),
(53, 28),
(53, 29),
(54, 43),
(55, 31),
(56, 28),
(57, 32),
(58, 27),
(58, 51),
(59, 30),
(60, 39),
(61, 52),
(62, 39),
(63, 38),
(64, 40),
(65, 33),
(66, 34),
(67, 33),
(68, 48),
(69, 45),
(69, 48),
(70, 42),
(70, 50),
(71, 43),
(72, 48),
(73, 42),
(74, 50),
(73, 49),
(75, 50),
(76, 42),
(77, 47),
(78, 53),
(79, 54),
(80, 55),
(81, 53);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `idtest` int(11) NOT NULL AUTO_INCREMENT,
  `idpostulante` int(11) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`idtest`),
  KEY `idpostulante` (`idpostulante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalletest`
--
ALTER TABLE `detalletest`
  ADD CONSTRAINT `detalletest_ibfk_2` FOREIGN KEY (`idpregunta`) REFERENCES `preguntas` (`idpregunta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalletest_ibfk_1` FOREIGN KEY (`idtest`) REFERENCES `test` (`idtest`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD CONSTRAINT `especialidad_ibfk_1` FOREIGN KEY (`idarea`) REFERENCES `area` (`idarea`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `preguntas_ibfk_1` FOREIGN KEY (`idarea`) REFERENCES `area` (`idarea`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pregunta_especialidad`
--
ALTER TABLE `pregunta_especialidad`
  ADD CONSTRAINT `pregunta_especialidad_ibfk_2` FOREIGN KEY (`idpregunta`) REFERENCES `preguntas` (`idpregunta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pregunta_especialidad_ibfk_1` FOREIGN KEY (`idespecialidad`) REFERENCES `especialidad` (`idespecialidad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`idpostulante`) REFERENCES `postulante` (`idpostulante`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
