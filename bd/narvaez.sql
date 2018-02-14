-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-02-2018 a las 17:58:39
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `narvaez`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `idAlumno` int(8) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidoPa` varchar(50) NOT NULL,
  `apellidosMa` varchar(50) NOT NULL,
  `codPago` varchar(15) NOT NULL,
  `tipoAlumno` varchar(30) NOT NULL,
  `estadoAlumno` varchar(30) NOT NULL,
  `idApoderado` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`idAlumno`, `nombre`, `apellidoPa`, `apellidosMa`, `codPago`, `tipoAlumno`, `estadoAlumno`, `idApoderado`) VALUES
(5, 'ALUMNO', 'PRUEBA2', 'PRUEBA2', 'PRUEBA2', 'INTERNO', 'ACTIVO', 1),
(6, 'LUIS GABRIEL', 'ALVARADO', 'DIONICIO', '000171910250', 'INTERNO', 'ACTIVO', 1),
(7, 'THIAGO MIGUEL', 'ALVAREZ', 'PEÑA', '000171909930', 'INTERNO', 'ACTIVO', 1),
(8, 'WILL FABIANO', 'ARROYO', 'CRUZ', '000171909940', 'INTERNO', 'ACTIVO', 1),
(9, 'BENJAMIN MANUEL', 'AYALA', 'VARAS', '000171910390', 'INTERNO', 'ACTIVO', 1),
(10, 'MILENKA APRIL', 'CABANILLAS', 'PONCE', '000171909950', 'INTERNO', 'ACTIVO', 1),
(11, 'TABATHA SABY', 'CENTENO', 'REYES', '000171910330', 'INTERNO', 'ACTIVO', 1),
(12, 'FLAVIO JOSE FRANCISCO', 'DAMIAN', 'SANCHEZ', '000171910240', 'INTERNO', 'ACTIVO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apoderado`
--

CREATE TABLE `apoderado` (
  `idApoderado` int(8) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidoPa` varchar(50) NOT NULL,
  `apellidosMa` varchar(50) NOT NULL,
  `dni` int(8) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `dominioEmail` varchar(50) NOT NULL,
  `otroTelefono` varchar(12) DEFAULT NULL,
  `email` varchar(90) NOT NULL,
  `sectorEmpleo` varchar(50) NOT NULL,
  `LugarEmpleo` varchar(50) NOT NULL,
  `facultadUnt` varchar(100) DEFAULT NULL,
  `cargoUnt` varchar(100) DEFAULT NULL,
  `condicionUnt` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `apoderado`
--

INSERT INTO `apoderado` (`idApoderado`, `nombres`, `apellidoPa`, `apellidosMa`, `dni`, `telefono`, `direccion`, `dominioEmail`, `otroTelefono`, `email`, `sectorEmpleo`, `LugarEmpleo`, `facultadUnt`, `cargoUnt`, `condicionUnt`) VALUES
(1, 'NULL', 'NULL', 'NULL', 0, 'NULL', 'NULL', 'NULL', NULL, 'NULL', 'NULL', 'NULL', NULL, NULL, NULL),
(4, 'APODERA', 'PRUEBA', 'PRUEBA', 0, 'PRUEBA', 'PRUEBA', 'PRUEBA', 'PRUEBA', '@outlook.com', 'PUBLICO', 'PRUEBA', 'PRUEBA', 'PRUEBA', 'PRUEBA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `idArea` int(8) NOT NULL,
  `nombreArea` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`idArea`, `nombreArea`) VALUES
(1, 'TESORERIA'),
(2, 'RECURSOS HUMANOS '),
(3, 'ALMACEN'),
(4, 'REGISTRO TECNICO'),
(5, 'SISTEMAS'),
(6, 'IMPRESIONES'),
(7, 'MESA DE PARTES'),
(8, 'BIBLIOTECA'),
(9, 'ASISTENCIA SOCIAL'),
(10, 'MEDICINA'),
(11, 'PSICOLOGIA'),
(12, 'MANTENIMIENTO'),
(13, 'LIMPIEZA'),
(14, 'SEGURIDAD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacitacion`
--

CREATE TABLE `capacitacion` (
  `idCapacitacion` int(8) NOT NULL,
  `idEmpleado` int(8) NOT NULL,
  `nombreCap` varchar(50) NOT NULL,
  `motivo` varchar(80) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaTermino` date NOT NULL,
  `montoPresupuesto` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato_trabajador`
--

CREATE TABLE `contrato_trabajador` (
  `idContrato` int(8) NOT NULL,
  `idArea` int(8) NOT NULL,
  `idEmpleado` int(8) NOT NULL,
  `fechaIngreso` datetime NOT NULL,
  `sueldo` float(5,2) NOT NULL,
  `idHorario` int(8) NOT NULL,
  `modo` varchar(50) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `entidadProcedencia` varchar(50) NOT NULL,
  `idTipoEmpleado` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `idCuenta` int(8) NOT NULL,
  `nivel` int(10) NOT NULL,
  `cuenta` varchar(80) NOT NULL,
  `codigo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`idCuenta`, `nivel`, `cuenta`, `codigo`) VALUES
(1, 1, 'INGRESOS PRESUPUESTARIOS', '1'),
(2, 2, 'VENTAS DE BIENES Y SERVICIOS\r\n', '1.3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `idCurso` int(8) NOT NULL,
  `abrev` varchar(10) NOT NULL,
  `curso` varchar(30) NOT NULL,
  `idNivel` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idCurso`, `abrev`, `curso`, `idNivel`) VALUES
(1, 'AJDRZ', 'AJEDREZ', 1),
(3, 'DNZ', 'DANZA', 1),
(4, 'MSC', 'MÚSICA', 1),
(5, 'INGLS', 'INGLÉS', 1),
(6, 'TTR', 'TUTORÍA', 1),
(7, 'MATE', 'MATEMATICA', 2),
(8, 'CMNC', 'COMUNICACIÓN', 2),
(9, 'PERS.SOC.', 'PERSONAL SOCIAL', 2),
(10, 'CC.AA.', 'CIENCIA Y AMBIENTE', 2),
(11, 'BH', 'BIOHUERTO', 2),
(12, 'EDUC.FIS.', 'EDUCACION FISICA', 2),
(13, 'EDUC.REL.', 'EDUCACION RELIGIOSA', 2),
(14, 'AJDREZ', 'TALLER DE AJEDREZ', 2),
(15, 'MUSICA', 'TALLER DE MÚSICA', 2),
(16, 'ART.VIS.', 'TALLER DE ARTE VISUALES', 2),
(17, 'DANZA', 'TALLER DE DANZA', 2),
(18, 'INGLES', 'TALLER DE INGLES', 2),
(19, 'COMPUTO', 'TALLER DE COMPUTACIÓN', 2),
(20, 'ROBOTICA', 'TALLER DE ROBOTICA', 2),
(21, 'TTR', 'TUTORIA', 2),
(22, 'AP.MATEM.', 'TALLER DE APTITUD MATEMÁTICA', 2),
(23, 'AP.VERBAL', 'TALLER DE APTITUD VERBAL', 2),
(24, 'MATE', 'MATEMÁTICA', 3),
(25, 'COMUNIC.', 'COMUNICACIÓN', 3),
(26, 'INGLES', 'INGLES', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_operativos`
--

CREATE TABLE `detalles_operativos` (
  `idDetalleOperativo` int(8) NOT NULL,
  `idperiodo` int(8) NOT NULL,
  `idgrado` int(8) NOT NULL,
  `idseccion` int(8) NOT NULL,
  `idHorario` int(8) NOT NULL,
  `idAlumno` int(8) NOT NULL,
  `turno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalles_operativos`
--

INSERT INTO `detalles_operativos` (`idDetalleOperativo`, `idperiodo`, `idgrado`, `idseccion`, `idHorario`, `idAlumno`, `turno`) VALUES
(6, 1, 15, 17, 1, 5, 'TARDE'),
(7, 4, 2, 2, 4, 6, 'Mañana'),
(8, 4, 2, 2, 4, 7, 'Mañana'),
(9, 4, 2, 2, 4, 8, 'Mañana'),
(10, 4, 2, 2, 4, 9, 'Mañana'),
(11, 4, 2, 2, 4, 10, 'Mañana'),
(12, 4, 2, 2, 4, 11, 'Mañana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` int(8) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidosPa` varchar(50) NOT NULL,
  `apellidosMa` varchar(50) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `dni` int(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dominioEmail` varchar(50) NOT NULL,
  `estadoCivil` varchar(20) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `fechaRegistro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `nombres`, `apellidosPa`, `apellidosMa`, `direccion`, `telefono`, `dni`, `email`, `dominioEmail`, `estadoCivil`, `sexo`, `fechaNacimiento`, `fechaRegistro`) VALUES
(8, 'PRUEBA', 'PRUEBA', 'PRUEBA', 'PRUEBA', 'PRUEBA', 0, 'PRUEBA', '@outlook.com', 'SOLTERO', 'F', '0000-00-00', '2018-02-13 23:56:04'),
(9, 'YSELLA NORA', 'APONTE', 'HERRERA', 'URB. LOS GRANADOS. ANTUNEZ 353', '#967694173', 18085874, 'yaponternc', '@gmail.com', 'SOLTERO', 'F', '2018-02-14', '2018-02-14 17:14:23'),
(11, 'CECILIO  ENRIQUE', 'VENEGAS', 'PIMINCHUMO', 'PINOS 351-HUANCHACO-TRUJILLO', '949622459', 17971014, 'cvenegasp', '@hotmail.com', 'CASADO', 'M', '1968-03-25', '2018-02-14 17:57:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `idGrado` int(8) NOT NULL,
  `descripcion` varchar(20) NOT NULL,
  `idNivel` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`idGrado`, `descripcion`, `idNivel`) VALUES
(1, '2 AÑOS', 1),
(2, '3 AÑOS', 1),
(3, '4 AÑOS', 1),
(4, '5 AÑOS', 1),
(5, '1ERO', 2),
(6, '2DO', 2),
(7, '3ERO', 2),
(8, '4TO', 2),
(9, '5TO', 2),
(10, '6TO', 2),
(11, '1ERO', 3),
(12, '2DO', 3),
(13, '3ERO', 3),
(14, '4TO', 3),
(15, '5TO', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `idHorario` int(8) NOT NULL,
  `horaEntrada` time NOT NULL,
  `horaSalida` time NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`idHorario`, `horaEntrada`, `horaSalida`, `tipo`) VALUES
(1, '09:00:00', '14:00:00', 'ADMINISTRATIVO'),
(2, '08:00:00', '15:00:00', 'ADMINISTRATIVO'),
(3, '12:00:00', '19:00:00', 'ADMINISTRATIVO'),
(4, '08:00:00', '12:30:00', 'INICIAL'),
(5, '07:00:00', '12:35:00', 'PRIMARIA_5TO'),
(6, '12:45:00', '18:15:00', 'SECUNDARIA_NO5TO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `idMatricula` int(8) NOT NULL,
  `idDetallesOperativos` int(8) NOT NULL,
  `fechaMatricula` datetime DEFAULT NULL,
  `codMatricula` varchar(20) NOT NULL,
  `fechaPago` date NOT NULL,
  `condicionAlumno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `matricula`
--

INSERT INTO `matricula` (`idMatricula`, `idDetallesOperativos`, `fechaMatricula`, `codMatricula`, `fechaPago`, `condicionAlumno`) VALUES
(5, 6, '2018-02-13 11:51:20', 'PRUEBA333', '2018-02-01', 'REGULAR'),
(6, 7, '2018-02-13 17:16:58', '0', '2018-02-13', 'A/D_RNC'),
(7, 8, '2018-02-13 17:22:12', '0', '2018-02-13', 'DOC_UNT'),
(8, 9, '2018-02-13 17:22:27', '0', '2018-02-13', 'NOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE `nivel` (
  `idNivel` int(8) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`idNivel`, `descripcion`) VALUES
(1, 'INICIAL'),
(2, 'PRIMARIA'),
(3, 'SECUNDARIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagobanco`
--

CREATE TABLE `pagobanco` (
  `idPagoBanco` int(8) NOT NULL,
  `idServicio` int(8) NOT NULL,
  `mora` float(5,3) NOT NULL,
  `fechaPago` date NOT NULL,
  `horaPago` time NOT NULL,
  `nroOperacion` int(50) NOT NULL,
  `codigoAgente` int(50) NOT NULL,
  `codigoTerminalista` int(50) NOT NULL,
  `idMatricula` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_servicio`
--

CREATE TABLE `pago_servicio` (
  `idPagoServicio` int(8) NOT NULL,
  `idServicio` int(8) NOT NULL,
  `fechaPago` datetime DEFAULT NULL,
  `idCurso` int(8) DEFAULT NULL,
  `idDetOp` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `idPeriodo` int(8) NOT NULL,
  `descripcion` varchar(20) NOT NULL,
  `mesInicio` varchar(30) NOT NULL,
  `mesFin` varchar(30) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`idPeriodo`, `descripcion`, `mesInicio`, `mesFin`, `fechaInicio`, `fechaFin`) VALUES
(1, 'VACACIONAL', 'ENERO', 'MARZO', '2018-01-02', '0000-00-00'),
(2, 'PRIMER PERIODO', 'ABRIL', 'JULIO', '0000-00-00', '0000-00-00'),
(3, 'SEGUNDO PERIODO', 'JULIO', 'DICIEMBRE', '0000-00-00', '0000-00-00'),
(4, 'AÑO ACADEMICO', 'MARZO', 'DICIEMBRE', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupueso`
--

CREATE TABLE `presupueso` (
  `idPresupuesto` int(8) NOT NULL,
  `fechaCreacion` date NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `presupueso`
--

INSERT INTO `presupueso` (`idPresupuesto`, `fechaCreacion`, `total`) VALUES
(1, '2018-01-01', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(8) NOT NULL,
  `nombreProd` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `fecha` datetime NOT NULL,
  `medida` varchar(10) NOT NULL,
  `costo` decimal(10,2) NOT NULL,
  `stock` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `nombreProd`, `descripcion`, `cantidad`, `codigo`, `fecha`, `medida`, `costo`, `stock`) VALUES
(2, 'PAPEL BOND', 'PAPEL BOND ', 3, 'UTOF', '2017-11-06 00:00:00', 'millares', '0.00', 2),
(4, 'CERAS DE PISO', 'CERAS PARA LA LIMPIEZA	\r\n								', 50, 'CRP', '0000-00-00 00:00:00', 'UN', '4.50', 45),
(5, 'MANTELES DE SECADO', '			PARA LOS AMBIENTES DE DOCENTES\r\n\r\n								', 50, 'CSC', '0000-00-00 00:00:00', 'METROS', '8.90', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requerimiento_producto`
--

CREATE TABLE `requerimiento_producto` (
  `idRequerimientoProd` int(8) NOT NULL,
  `fecha` datetime NOT NULL,
  `cantidad` int(11) NOT NULL,
  `idProducto` int(8) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Disparadores `requerimiento_producto`
--
DELIMITER $$
CREATE TRIGGER `actualizar_stock` AFTER INSERT ON `requerimiento_producto` FOR EACH ROW UPDATE producto 
SET producto.stock = producto.stock - new.cantidad
WHERE producto.idProducto = new.idProducto
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(8) NOT NULL,
  `nombreRol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `nombreRol`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'TESORERIA'),
(3, 'ALMACEN'),
(4, 'RRHH'),
(5, 'ADMISION');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `idSeccion` int(8) NOT NULL,
  `descripcion` varchar(20) NOT NULL,
  `idGrado` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`idSeccion`, `descripcion`, `idGrado`) VALUES
(1, 'U', 1),
(2, 'A', 2),
(3, 'A', 3),
(4, 'A', 4),
(5, 'A', 5),
(6, 'B', 5),
(7, 'A', 6),
(8, 'A', 7),
(9, 'A', 8),
(10, 'A', 9),
(11, 'A', 10),
(12, 'A', 11),
(13, 'A', 12),
(14, 'A', 13),
(15, 'A', 14),
(16, 'A', 15),
(17, 'B', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `idServicio` int(8) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `monto` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`idServicio`, `codigo`, `descripcion`, `monto`) VALUES
(15, 'CVI', 'CICLO VACACIONAL-INICIAL', 200.00),
(16, 'CVI_C/B', 'CICLO VACACIONAL-INICIAL CON BENEFICIO', 170.00),
(17, 'CVPS', 'CICLO VACACIONAL-PRIMARIA Y SECUNDARIA', 250.00),
(18, 'CVPS_C/B', 'CICLO VACACIONAL-PRIMARIA Y SECUNDARIA C/B', 170.00),
(19, 'DCE', 'DERECHO DE CERTIFICADO DE ESTUDIOS', 30.00),
(20, 'DCNE', 'DERECHO DE CONSTANCIA DE ESTUDIOS', 5.00),
(21, 'DEXA', 'DERECHO DE EXAMEN DE APLAZADO', 40.00),
(22, 'DA', 'DUPLICADO DE AGENDA', 15.00),
(23, 'DIAN', 'DERECHO DE INSCRIPCION ALUMNO NUEVO', 100.00),
(24, 'DIGAN', 'DERECHO POR INGRESO ALUMNO NUEVO', 350.00),
(25, 'DM', 'DERECHO DE MATRICULA', 200.00),
(26, 'PEM', 'PENSION EDUCATIVA MENSUAL', 255.00),
(27, 'PEM_HM', 'PENSION EDUCATIVA MENSUAL-MNO. MENOR', 175.00),
(28, 'PEM_MB', 'PENSION EDUCATIVA MENSUAL-MEDIA BECA', 175.00),
(29, 'PEM_UNT', 'PENSION EDUCATIVA MENSUAL-TRABAJADOR UNT', 160.00),
(30, 'PEM_RNC', 'PENSION EDUCATIVA MENSUAL-TRABAJADOR RNC', 100.00),
(31, 'PEM_PP', 'PENSION EDUCATIVA MENSUAL-PRIMER PUESTO', 70.00),
(32, 'CVI', 'CICLO VACACIONAL-INICIAL', 200.00),
(33, 'CVI_C/B', 'CICLO VACACIONAL-INICIAL CON BENEFICIO', 170.00),
(34, 'CVPS', 'CICLO VACACIONAL-PRIMARIA Y SECUNDARIA', 250.00),
(35, 'CVPS_C/B', 'CICLO VACACIONAL-PRIMARIA Y SECUNDARIA C/B', 170.00),
(36, 'DCE', 'DERECHO DE CERTIFICADO DE ESTUDIOS', 30.00),
(37, 'DCNE', 'DERECHO DE CONSTANCIA DE ESTUDIOS', 5.00),
(38, 'DEXA', 'DERECHO DE EXAMEN DE APLAZADO', 40.00),
(39, 'DA', 'DUPLICADO DE AGENDA', 15.00),
(40, 'DIAN', 'DERECHO DE INSCRIPCION ALUMNO NUEVO', 100.00),
(41, 'DIGAN', 'DERECHO POR INGRESO ALUMNO NUEVO', 350.00),
(42, 'DM', 'DERECHO DE MATRICULA', 200.00),
(43, 'PEM', 'PENSION EDUCATIVA MENSUAL', 255.00),
(44, 'PEM_HM', 'PENSION EDUCATIVA MENSUAL-MNO. MENOR', 175.00),
(45, 'PEM_MB', 'PENSION EDUCATIVA MENSUAL-MEDIA BECA', 175.00),
(46, 'PEM_UNT', 'PENSION EDUCATIVA MENSUAL-TRABAJADOR UNT', 160.00),
(47, 'PEM_RNC', 'PENSION EDUCATIVA MENSUAL-TRABAJADOR RNC', 100.00),
(48, 'PEM_PP', 'PENSION EDUCATIVA MENSUAL-PRIMER PUESTO', 70.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_trabajador`
--

CREATE TABLE `tipo_trabajador` (
  `idTipoEmpleado` int(8) NOT NULL,
  `clave` varchar(3) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_trabajador`
--

INSERT INTO `tipo_trabajador` (`idTipoEmpleado`, `clave`, `descripcion`) VALUES
(1, 'DIR', 'DIRECTIVO'),
(2, 'DOC', 'DOCENTE'),
(3, 'ADM', 'ADMINISTRATIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(8) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `user` varchar(20) NOT NULL,
  `idEmpleado` int(8) NOT NULL,
  `idRol` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `pass`, `user`, `idEmpleado`, `idRol`) VALUES
(1, '1234', 'admin', 8, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`idAlumno`),
  ADD UNIQUE KEY `codPago` (`codPago`),
  ADD KEY `idApoderado` (`idApoderado`);

--
-- Indices de la tabla `apoderado`
--
ALTER TABLE `apoderado`
  ADD PRIMARY KEY (`idApoderado`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`idArea`);

--
-- Indices de la tabla `capacitacion`
--
ALTER TABLE `capacitacion`
  ADD PRIMARY KEY (`idCapacitacion`),
  ADD KEY `idEmpleado` (`idEmpleado`);

--
-- Indices de la tabla `contrato_trabajador`
--
ALTER TABLE `contrato_trabajador`
  ADD PRIMARY KEY (`idContrato`),
  ADD KEY `idArea` (`idArea`),
  ADD KEY `idEmpleado` (`idEmpleado`),
  ADD KEY `idHorario` (`idHorario`),
  ADD KEY `idTipoEmpleado` (`idTipoEmpleado`);

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`idCuenta`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idCurso`),
  ADD KEY `idNivel` (`idNivel`);

--
-- Indices de la tabla `detalles_operativos`
--
ALTER TABLE `detalles_operativos`
  ADD PRIMARY KEY (`idDetalleOperativo`),
  ADD KEY `idgrado` (`idgrado`),
  ADD KEY `idperiodo` (`idperiodo`),
  ADD KEY `idseccion` (`idseccion`),
  ADD KEY `idHorario` (`idHorario`),
  ADD KEY `idAlumno` (`idAlumno`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`idGrado`),
  ADD KEY `idNivel` (`idNivel`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`idHorario`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`idMatricula`),
  ADD KEY `idDetallesOperativos` (`idDetallesOperativos`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`idNivel`);

--
-- Indices de la tabla `pagobanco`
--
ALTER TABLE `pagobanco`
  ADD PRIMARY KEY (`idPagoBanco`),
  ADD KEY `idServicio` (`idServicio`),
  ADD KEY `idMatricula` (`idMatricula`);

--
-- Indices de la tabla `pago_servicio`
--
ALTER TABLE `pago_servicio`
  ADD PRIMARY KEY (`idPagoServicio`),
  ADD KEY `idServicio` (`idServicio`),
  ADD KEY `idCurso` (`idCurso`),
  ADD KEY `pago_servicio_ibfk_6` (`idDetOp`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`idPeriodo`);

--
-- Indices de la tabla `presupueso`
--
ALTER TABLE `presupueso`
  ADD PRIMARY KEY (`idPresupuesto`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `requerimiento_producto`
--
ALTER TABLE `requerimiento_producto`
  ADD PRIMARY KEY (`idRequerimientoProd`),
  ADD KEY `idProducto` (`idProducto`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`idSeccion`),
  ADD KEY `idGrado` (`idGrado`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`idServicio`);

--
-- Indices de la tabla `tipo_trabajador`
--
ALTER TABLE `tipo_trabajador`
  ADD PRIMARY KEY (`idTipoEmpleado`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idEmpleado` (`idEmpleado`),
  ADD KEY `idRol` (`idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `idAlumno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `apoderado`
--
ALTER TABLE `apoderado`
  MODIFY `idApoderado` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `idArea` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `capacitacion`
--
ALTER TABLE `capacitacion`
  MODIFY `idCapacitacion` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contrato_trabajador`
--
ALTER TABLE `contrato_trabajador`
  MODIFY `idContrato` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  MODIFY `idCuenta` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `idCurso` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `detalles_operativos`
--
ALTER TABLE `detalles_operativos`
  MODIFY `idDetalleOperativo` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmpleado` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `grado`
--
ALTER TABLE `grado`
  MODIFY `idGrado` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `idHorario` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `matricula`
--
ALTER TABLE `matricula`
  MODIFY `idMatricula` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
  MODIFY `idNivel` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pagobanco`
--
ALTER TABLE `pagobanco`
  MODIFY `idPagoBanco` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pago_servicio`
--
ALTER TABLE `pago_servicio`
  MODIFY `idPagoServicio` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `idPeriodo` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `requerimiento_producto`
--
ALTER TABLE `requerimiento_producto`
  MODIFY `idRequerimientoProd` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `seccion`
--
ALTER TABLE `seccion`
  MODIFY `idSeccion` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `idServicio` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `tipo_trabajador`
--
ALTER TABLE `tipo_trabajador`
  MODIFY `idTipoEmpleado` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`idApoderado`) REFERENCES `apoderado` (`idApoderado`);

--
-- Filtros para la tabla `capacitacion`
--
ALTER TABLE `capacitacion`
  ADD CONSTRAINT `capacitacion_ibfk_1` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`);

--
-- Filtros para la tabla `contrato_trabajador`
--
ALTER TABLE `contrato_trabajador`
  ADD CONSTRAINT `contrato_trabajador_ibfk_1` FOREIGN KEY (`idArea`) REFERENCES `area` (`idArea`),
  ADD CONSTRAINT `contrato_trabajador_ibfk_3` FOREIGN KEY (`idHorario`) REFERENCES `horario` (`idHorario`),
  ADD CONSTRAINT `contrato_trabajador_ibfk_4` FOREIGN KEY (`idTipoEmpleado`) REFERENCES `tipo_trabajador` (`idTipoEmpleado`),
  ADD CONSTRAINT `contrato_trabajador_ibfk_5` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`);

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_2` FOREIGN KEY (`idNivel`) REFERENCES `nivel` (`idNivel`);

--
-- Filtros para la tabla `detalles_operativos`
--
ALTER TABLE `detalles_operativos`
  ADD CONSTRAINT `detalles_operativos_ibfk_1` FOREIGN KEY (`idgrado`) REFERENCES `grado` (`idGrado`),
  ADD CONSTRAINT `detalles_operativos_ibfk_2` FOREIGN KEY (`idperiodo`) REFERENCES `periodo` (`idPeriodo`),
  ADD CONSTRAINT `detalles_operativos_ibfk_3` FOREIGN KEY (`idseccion`) REFERENCES `seccion` (`idSeccion`),
  ADD CONSTRAINT `detalles_operativos_ibfk_6` FOREIGN KEY (`idHorario`) REFERENCES `horario` (`idHorario`),
  ADD CONSTRAINT `detalles_operativos_ibfk_7` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`idAlumno`);

--
-- Filtros para la tabla `grado`
--
ALTER TABLE `grado`
  ADD CONSTRAINT `grado_ibfk_1` FOREIGN KEY (`idNivel`) REFERENCES `nivel` (`idNivel`);

--
-- Filtros para la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `matricula_ibfk_2` FOREIGN KEY (`idDetallesOperativos`) REFERENCES `detalles_operativos` (`idDetalleOperativo`);

--
-- Filtros para la tabla `pagobanco`
--
ALTER TABLE `pagobanco`
  ADD CONSTRAINT `pagobanco_ibfk_2` FOREIGN KEY (`idServicio`) REFERENCES `servicios` (`idServicio`),
  ADD CONSTRAINT `pagobanco_ibfk_3` FOREIGN KEY (`idMatricula`) REFERENCES `matricula` (`idMatricula`);

--
-- Filtros para la tabla `pago_servicio`
--
ALTER TABLE `pago_servicio`
  ADD CONSTRAINT `pago_servicio_ibfk_3` FOREIGN KEY (`idServicio`) REFERENCES `servicios` (`idServicio`),
  ADD CONSTRAINT `pago_servicio_ibfk_5` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`idCurso`),
  ADD CONSTRAINT `pago_servicio_ibfk_6` FOREIGN KEY (`idDetOp`) REFERENCES `detalles_operativos` (`idDetalleOperativo`);

--
-- Filtros para la tabla `requerimiento_producto`
--
ALTER TABLE `requerimiento_producto`
  ADD CONSTRAINT `requerimiento_producto_ibfk_2` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`);

--
-- Filtros para la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD CONSTRAINT `seccion_ibfk_1` FOREIGN KEY (`idGrado`) REFERENCES `grado` (`idGrado`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
