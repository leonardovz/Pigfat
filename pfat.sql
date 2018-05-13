-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-05-2018 a las 23:36:03
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pfat`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alimentos`
--

CREATE TABLE `alimentos` (
  `idAlimento` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tipoAlimento` enum('NACIMIENTO','CUARENTENA','DESTETE','ENGORDA','FINALIZADOR','LACTANCIA') NOT NULL,
  `cantidadAlimento` int(11) NOT NULL,
  `unidadMedida` enum('SACO50KG','SACO20KG','TONELADA','KG') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alimentos`
--

INSERT INTO `alimentos` (`idAlimento`, `nombre`, `tipoAlimento`, `cantidadAlimento`, `unidadMedida`) VALUES
(400001, 'Cerdo 100000', 'NACIMIENTO', 20, 'SACO20KG'),
(400002, 'Soya', 'ENGORDA', 3, 'TONELADA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apareamientos`
--

CREATE TABLE `apareamientos` (
  `idApareamiento` int(11) NOT NULL,
  `idRazaHembra` int(11) NOT NULL,
  `idRazaMacho` int(11) NOT NULL,
  `montaUno` date NOT NULL,
  `montados` date NOT NULL,
  `fechaAproximadaNacimiento` date NOT NULL,
  `fechaRealNacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cerdas`
--

CREATE TABLE `cerdas` (
  `idCerda` int(11) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `idRaza` int(11) NOT NULL,
  `numPartos` int(11) NOT NULL,
  `estadoCerda` enum('PRODUCCION','VENTA') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cerdas`
--

INSERT INTO `cerdas` (`idCerda`, `fechaNacimiento`, `idRaza`, `numPartos`, `estadoCerda`) VALUES
(200001, '2016-03-18', 1200001, 0, 'PRODUCCION'),
(200002, '2016-03-17', 1200001, 2, 'PRODUCCION'),
(200003, '2017-03-26', 1200002, 3, 'VENTA'),
(200004, '2012-12-12', 1200003, 2, 'PRODUCCION'),
(200005, '2018-04-12', 1200001, 1, ''),
(200006, '2012-03-02', 1200004, 2, ''),
(200007, '0000-00-00', 1200001, 0, ''),
(200008, '0000-00-00', 1200001, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corrales`
--

CREATE TABLE `corrales` (
  `idCorral` int(11) NOT NULL,
  `numCorral` int(11) NOT NULL,
  `estadoCorral` enum('ENGORDA','VENTA') NOT NULL,
  `idRaza` int(11) NOT NULL,
  `Estado` enum('Activo','Inactivo') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `corrales`
--

INSERT INTO `corrales` (`idCorral`, `numCorral`, `estadoCorral`, `idRaza`, `Estado`) VALUES
(500001, 1, 'ENGORDA', 0, 'Activo'),
(500002, 2, 'ENGORDA', 0, 'Activo'),
(500003, 3, 'VENTA', 0, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `engordas`
--

CREATE TABLE `engordas` (
  `idEngorda` int(11) NOT NULL,
  `numAnimalesEngorda` int(11) NOT NULL,
  `fechaProgramadaVacunas` date NOT NULL,
  `fechaRealVacunas` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lactancias`
--

CREATE TABLE `lactancias` (
  `idLactancia` int(11) NOT NULL,
  `numCerdos21Dias` int(11) NOT NULL,
  `pesoCamada21Dias` float NOT NULL,
  `diasLactancia` int(11) NOT NULL,
  `numCerdosLactancia` int(11) NOT NULL,
  `pesoCamadaLactancia` float NOT NULL,
  `fechaProgramadaVacunas` date NOT NULL,
  `fechaRealVacunas` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamentos`
--

CREATE TABLE `medicamentos` (
  `idMedicamento` int(11) NOT NULL,
  `principioActivo` varchar(200) NOT NULL,
  `nombreMedicamento` varchar(200) NOT NULL,
  `laboratorioProcedencia` varchar(45) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `viaSuministro` enum('ALIMENTO','INYECCION','ORAL','CUTANEA') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paginacion`
--

CREATE TABLE `paginacion` (
  `ID` int(11) NOT NULL,
  `Descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paginacion`
--

INSERT INTO `paginacion` (`ID`, `Descripcion`) VALUES
(1, '1. Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
(2, '2. Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
(3, '3. Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
(4, '4. Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
(5, '5. Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
(6, '6. Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
(7, '7. Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
(8, '8. Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
(9, '9. Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
(10, '10. Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
(11, '11.Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
(12, '12. Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
(13, '13.Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
(14, '14.Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
(15, '15.Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
(16, '16.Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
(17, '17.Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
(18, '18.Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
(19, '19.Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
(20, '20.Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
(21, '21.Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
(22, '22.Lorem ipsum dolor sit amet consectetur adipisicing elit.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partos`
--

CREATE TABLE `partos` (
  `idParto` int(11) NOT NULL,
  `idRaza` int(11) NOT NULL,
  `idRazaMacho` int(11) NOT NULL,
  `numParto` int(11) NOT NULL,
  `fechaDesteteAnterior` date NOT NULL,
  `fechaPrenez` date NOT NULL,
  `diasAbiertos` int(11) NOT NULL,
  `fechaParto` date NOT NULL,
  `nacidosVivosMachos` int(11) NOT NULL,
  `nacidosMuertosMachos` int(11) NOT NULL,
  `nacidosVivosHembras` int(11) NOT NULL,
  `nacidosMuertosHembras` int(11) NOT NULL,
  `totalNacidos` int(11) NOT NULL,
  `pesoPromedioCamada` float NOT NULL,
  `estado` enum('CASETA','VENTA') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `partos`
--

INSERT INTO `partos` (`idParto`, `idRaza`, `idRazaMacho`, `numParto`, `fechaDesteteAnterior`, `fechaPrenez`, `diasAbiertos`, `fechaParto`, `nacidosVivosMachos`, `nacidosMuertosMachos`, `nacidosVivosHembras`, `nacidosMuertosHembras`, `totalNacidos`, `pesoPromedioCamada`, `estado`) VALUES
(1300001, 1200003, 1200001, 1, '0000-00-00', '2017-12-19', 0, '2018-04-18', 8, 0, 1, 0, 9, 3.1, 'CASETA'),
(1300002, 1200004, 1200002, 2, '2017-09-29', '2018-01-05', 6, '2018-04-18', 4, 1, 5, 0, 10, 3.5, 'CASETA'),
(1300003, 0, 1200001, 4, '2018-04-12', '2018-04-27', 123, '2018-04-20', 1, 0, 0, 0, 10, 8, ''),
(1300004, 0, 1200001, 4, '2018-04-12', '2018-04-27', 123, '2018-04-20', 1, 0, 0, 0, 10, 8, ''),
(1300005, 0, 1200001, 0, '0000-00-00', '0000-00-00', 0, '0000-00-00', 0, 0, 0, 0, 0, 0, 'VENTA'),
(1300006, 0, 1200001, 4, '2018-04-04', '2018-04-03', 5, '2018-04-19', 3, 0, 7, 45, 4, 785463, 'VENTA'),
(1300007, 0, 1200005, 0, '2018-04-21', '2018-04-13', 89, '2018-05-03', 9, 0, 9, 9, 9, -12, ''),
(1300008, 0, 1200001, -1222, '2018-04-20', '0000-00-00', -12, '2018-04-19', -12, 0, -12, -12, -12, -12, 'VENTA'),
(1300009, 0, 1200001, 412, '2018-04-30', '2018-04-09', 2, '2018-04-03', 3, 0, 8, 5, 8, 0, 'VENTA'),
(1300010, 0, 1200001, 0, '0000-00-00', '0000-00-00', 0, '0000-00-00', 0, 0, 0, 0, 0, 0, 'VENTA'),
(1300011, 0, 1200001, 0, '0000-00-00', '0000-00-00', 0, '0000-00-00', 0, 0, 0, 0, 0, 0, 'VENTA'),
(1300012, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '0000-00-00', 0, 0, 0, 0, 0, 0, ''),
(1300013, 0, 1200001, 0, '0000-00-00', '0000-00-00', 0, '0000-00-00', 0, 0, 0, 0, 0, 0, 'VENTA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sementales`
--

CREATE TABLE `sementales` (
  `idCerdo` int(11) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `idRaza` int(11) NOT NULL,
  `pesoNacimiento` float NOT NULL,
  `pesoDestete` float NOT NULL,
  `razaPadre` varchar(100) NOT NULL,
  `razaMadre` varchar(100) NOT NULL,
  `numHermanosNacidos` int(11) NOT NULL,
  `numHermanosDestete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sementales`
--

INSERT INTO `sementales` (`idCerdo`, `fechaNacimiento`, `idRaza`, `pesoNacimiento`, `pesoDestete`, `razaPadre`, `razaMadre`, `numHermanosNacidos`, `numHermanosDestete`) VALUES
(300001, '2017-04-12', 1200001, 3.3, 8.2, 'York', 'York', 9, 9),
(300002, '2016-12-11', 1200002, 4, 9.3, 'York', 'York', 8, 7),
(300003, '2018-04-25', 1200001, 12, 123, 'LANDRACE', 'LANDRACE', 12, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `pass`) VALUES
(1, 'leonardo', '1234567890'),
(16, 'cesar', 'cesar123'),
(17, '207448228', 'rafarafa'),
(19, 'leonardo13', 'leonardo13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunas`
--

CREATE TABLE `vacunas` (
  `idVacuna` int(11) NOT NULL,
  `principioActivo` varchar(200) NOT NULL,
  `enfermedadPreventiva` varchar(200) NOT NULL,
  `cantidadVacunas` int(11) NOT NULL,
  `observaciones` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idVenta` int(11) NOT NULL,
  `fechaVenta` date NOT NULL,
  `numCerdos` int(11) NOT NULL,
  `kgTotales` int(11) NOT NULL,
  `precioKg` float NOT NULL,
  `precioPromedioCerdo` float NOT NULL,
  `totalDinero` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alimentos`
--
ALTER TABLE `alimentos`
  ADD PRIMARY KEY (`idAlimento`),
  ADD UNIQUE KEY `idAlimento_UNIQUE` (`idAlimento`);

--
-- Indices de la tabla `apareamientos`
--
ALTER TABLE `apareamientos`
  ADD PRIMARY KEY (`idApareamiento`),
  ADD UNIQUE KEY `idApareamiento_UNIQUE` (`idApareamiento`);

--
-- Indices de la tabla `cerdas`
--
ALTER TABLE `cerdas`
  ADD PRIMARY KEY (`idCerda`),
  ADD UNIQUE KEY `idCerda_UNIQUE` (`idCerda`);

--
-- Indices de la tabla `corrales`
--
ALTER TABLE `corrales`
  ADD PRIMARY KEY (`idCorral`),
  ADD UNIQUE KEY `idCorral_UNIQUE` (`idCorral`);

--
-- Indices de la tabla `engordas`
--
ALTER TABLE `engordas`
  ADD PRIMARY KEY (`idEngorda`),
  ADD UNIQUE KEY `idEngorda_UNIQUE` (`idEngorda`);

--
-- Indices de la tabla `lactancias`
--
ALTER TABLE `lactancias`
  ADD PRIMARY KEY (`idLactancia`),
  ADD UNIQUE KEY `idLactancia_UNIQUE` (`idLactancia`);

--
-- Indices de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`idMedicamento`),
  ADD UNIQUE KEY `idMedicamento_UNIQUE` (`idMedicamento`);

--
-- Indices de la tabla `paginacion`
--
ALTER TABLE `paginacion`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `partos`
--
ALTER TABLE `partos`
  ADD PRIMARY KEY (`idParto`),
  ADD UNIQUE KEY `idParto_UNIQUE` (`idParto`);

--
-- Indices de la tabla `sementales`
--
ALTER TABLE `sementales`
  ADD PRIMARY KEY (`idCerdo`),
  ADD UNIQUE KEY `idCerdo_UNIQUE` (`idCerdo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `vacunas`
--
ALTER TABLE `vacunas`
  ADD PRIMARY KEY (`idVacuna`),
  ADD UNIQUE KEY `idVacuna_UNIQUE` (`idVacuna`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idVenta`),
  ADD UNIQUE KEY `idVenta_UNIQUE` (`idVenta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alimentos`
--
ALTER TABLE `alimentos`
  MODIFY `idAlimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=400003;
--
-- AUTO_INCREMENT de la tabla `apareamientos`
--
ALTER TABLE `apareamientos`
  MODIFY `idApareamiento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cerdas`
--
ALTER TABLE `cerdas`
  MODIFY `idCerda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200009;
--
-- AUTO_INCREMENT de la tabla `corrales`
--
ALTER TABLE `corrales`
  MODIFY `idCorral` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=500004;
--
-- AUTO_INCREMENT de la tabla `engordas`
--
ALTER TABLE `engordas`
  MODIFY `idEngorda` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `lactancias`
--
ALTER TABLE `lactancias`
  MODIFY `idLactancia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `idMedicamento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `paginacion`
--
ALTER TABLE `paginacion`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `partos`
--
ALTER TABLE `partos`
  MODIFY `idParto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1300014;
--
-- AUTO_INCREMENT de la tabla `sementales`
--
ALTER TABLE `sementales`
  MODIFY `idCerdo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300004;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `vacunas`
--
ALTER TABLE `vacunas`
  MODIFY `idVacuna` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idVenta` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
