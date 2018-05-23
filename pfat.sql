-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-05-2018 a las 22:39:57
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
  `idHembra` int(11) NOT NULL,
  `idMacho` int(11) NOT NULL,
  `montaUno` date NOT NULL,
  `montaDos` date NOT NULL,
  `fechaAproximadaNacimiento` date NOT NULL,
  `fechaRealNacimiento` date NOT NULL,
  `estadoApareamiento` enum('curso','terminado','interrumpido','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `apareamientos`
--

INSERT INTO `apareamientos` (`idApareamiento`, `idHembra`, `idMacho`, `montaUno`, `montaDos`, `fechaAproximadaNacimiento`, `fechaRealNacimiento`, `estadoApareamiento`) VALUES
(1, 200001, 300002, '2018-05-16', '2018-05-23', '2018-08-23', '0000-00-00', 'curso'),
(2, 200008, 300001, '2018-05-16', '2018-05-23', '2018-08-23', '0000-00-00', 'terminado'),
(3, 200010, 300003, '2018-05-16', '2018-05-23', '2018-08-25', '0000-00-00', 'curso'),
(4, 200010, 300002, '2018-05-18', '2018-05-25', '2018-09-01', '0000-00-00', 'curso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cerdas`
--

CREATE TABLE `cerdas` (
  `idCerda` int(11) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `idRaza` int(11) NOT NULL,
  `numPartos` int(11) NOT NULL,
  `estadoCerda` enum('produccion','venta','desecho','muerta','enferma','prenez') NOT NULL,
  `idPArto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cerdas`
--

INSERT INTO `cerdas` (`idCerda`, `fechaNacimiento`, `idRaza`, `numPartos`, `estadoCerda`, `idPArto`) VALUES
(200001, '2018-05-05', 1200001, 1, 'venta', 1300001),
(200008, '2018-05-22', 1200001, 0, 'produccion', 200000),
(200009, '2018-05-22', 1200001, 0, 'produccion', 200000),
(200010, '2018-04-20', 1200001, 4, 'prenez', 1300003);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corrales`
--

CREATE TABLE `corrales` (
  `idCorral` int(11) NOT NULL,
  `numCorral` int(11) NOT NULL,
  `estadoCorral` enum('ENGORDA','VENTA','VACIO') NOT NULL,
  `idRaza` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `corrales`
--

INSERT INTO `corrales` (`idCorral`, `numCorral`, `estadoCorral`, `idRaza`) VALUES
(1200007, 1200007, 'ENGORDA', 1200001),
(1200009, 4, 'ENGORDA', 1200000),
(1200011, 6, 'ENGORDA', 1200000),
(1200012, 7, 'ENGORDA', 1200000),
(1200013, 8, 'ENGORDA', 1200000),
(1200018, 15, 'ENGORDA', 1200000),
(1200019, 1, 'ENGORDA', 1200001);

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
  `fechaRealVacunas` date NOT NULL,
  `idParto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lactancias`
--

INSERT INTO `lactancias` (`idLactancia`, `numCerdos21Dias`, `pesoCamada21Dias`, `diasLactancia`, `numCerdosLactancia`, `pesoCamadaLactancia`, `fechaProgramadaVacunas`, `fechaRealVacunas`, `idParto`) VALUES
(500001, 9, 55, 40, 9, 90, '2018-09-15', '2018-09-15', 1300001),
(500002, 0, 0, 40, 10, 100, '0000-00-00', '0000-00-00', 1300002);

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

--
-- Volcado de datos para la tabla `medicamentos`
--

INSERT INTO `medicamentos` (`idMedicamento`, `principioActivo`, `nombreMedicamento`, `laboratorioProcedencia`, `cantidad`, `viaSuministro`) VALUES
(1, 'Paracetamol', 'Paracetamol', 'Caquita', 0, 'ALIMENTO'),
(2, 'Arroz', 'Aroz con leche', 'doctor simo', 32, 'INYECCION');

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
  `idApareamiento` int(11) NOT NULL,
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
  `estado` enum('destete','engorda','enfermo','venta') NOT NULL,
  `pesoCamada` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `partos`
--

INSERT INTO `partos` (`idParto`, `idApareamiento`, `idRaza`, `idRazaMacho`, `numParto`, `fechaDesteteAnterior`, `fechaPrenez`, `diasAbiertos`, `fechaParto`, `nacidosVivosMachos`, `nacidosMuertosMachos`, `nacidosVivosHembras`, `nacidosMuertosHembras`, `totalNacidos`, `pesoPromedioCamada`, `estado`, `pesoCamada`) VALUES
(1300001, 0, 1200003, 1200001, 1, '0000-00-00', '2017-12-19', 0, '2018-04-18', 8, 0, 1, 0, 9, 3.1, 'engorda', 27.9),
(1300002, 0, 1200004, 1200002, 2, '2017-09-29', '2018-01-05', 6, '2018-04-18', 4, 1, 5, 0, 10, 3.5, 'engorda', 35),
(1300003, 0, 0, 1200001, 4, '2018-04-12', '2018-04-27', 123, '2018-04-20', 1, 0, 9, 0, 10, 3.9, 'destete', 39),
(1300004, 0, 0, 1200001, 4, '2018-04-12', '2018-04-27', 123, '2018-04-20', 4, 0, 6, 0, 10, 4.2, 'destete', 42),
(1300006, 0, 0, 1200001, 4, '2018-04-04', '2018-04-03', 5, '2018-04-19', 3, 0, 7, 0, 10, 4.6, 'destete', 46),
(1300009, 0, 0, 1200001, 412, '2018-04-30', '2018-04-09', 2, '2018-04-03', 3, 0, 8, 5, 16, 3.8, 'destete', 60.8),
(1300014, 0, 0, 1200001, 5, '2017-12-05', '2017-12-09', 40, '2018-05-21', 5, 1, 6, 0, 12, 48, 'destete', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raza`
--

CREATE TABLE `raza` (
  `idRaza` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `raza`
--

INSERT INTO `raza` (`idRaza`, `Nombre`) VALUES
(1200000, 'Vacio'),
(1200001, 'Ladrace'),
(1200002, 'Mocre'),
(1200003, 'Perejil'),
(1200004, 'Porki');

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
  `numHermanosDestete` int(11) NOT NULL,
  `estadoCerdo` enum('produccion','venta','muerto','enfermo','desecho') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sementales`
--

INSERT INTO `sementales` (`idCerdo`, `fechaNacimiento`, `idRaza`, `pesoNacimiento`, `pesoDestete`, `razaPadre`, `razaMadre`, `numHermanosNacidos`, `numHermanosDestete`, `estadoCerdo`) VALUES
(300001, '2017-04-11', 1200001, 2.2, 8.2, 'York', 'York', 9, 9, 'produccion'),
(300002, '2016-12-11', 1200002, 2.1, 9.3, 'York', 'York', 8, 7, 'desecho'),
(300003, '2018-04-25', 1200001, 1.9, 9.2, 'LANDRACE', 'LANDRACE', 12, 12, 'produccion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `tipoUser` enum('Admin','Casetero','Veterinario','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `pass`, `tipoUser`) VALUES
(1, 'leonardo', '1234567890', 'Admin'),
(16, 'cesar', 'cesar123', 'Veterinario'),
(17, '207448228', 'rafarafa', 'Admin'),
(19, 'leonardo13', 'leonardo13', 'Admin'),
(20, 'vazquez', 'leonardo', 'Admin'),
(21, 'Cardona', 'Leonardo', 'Veterinario');

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

--
-- Volcado de datos para la tabla `vacunas`
--

INSERT INTO `vacunas` (`idVacuna`, `principioActivo`, `enfermedadPreventiva`, `cantidadVacunas`, `observaciones`) VALUES
(1, 'Paracetamol', 'Erpes', 15, 'El animalito se siente mal'),
(2, 'Penicilina', 'Hongos en las patas ya trae mas', 2, 'Si lo se las das se va a morir');

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
  `pesoPromedioCerdo` float NOT NULL,
  `totalDinero` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`idVenta`, `fechaVenta`, `numCerdos`, `kgTotales`, `precioKg`, `pesoPromedioCerdo`, `totalDinero`) VALUES
(2, '2018-05-16', 14, 600, 15, 42, 900),
(124, '2018-05-02', 123, 123, 123, 1, 15129),
(127, '2018-05-23', 123, 400, 123, 3.25, 49200),
(128, '2018-05-14', 13, 400, 1500, 30.77, 600000),
(129, '2018-05-20', 123, 400, 123, 3.25, 49200),
(130, '2018-05-20', 123, 400, 45, 3.25, 18000);

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
  ADD UNIQUE KEY `idCorral_UNIQUE` (`idCorral`),
  ADD UNIQUE KEY `numCorral` (`numCorral`);

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
  ADD UNIQUE KEY `idLactancia_UNIQUE` (`idLactancia`),
  ADD KEY `lactancia_partos_idx` (`idParto`);

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
  ADD UNIQUE KEY `idParto_UNIQUE` (`idParto`),
  ADD KEY `parto_apareamiento_idx` (`idApareamiento`);

--
-- Indices de la tabla `raza`
--
ALTER TABLE `raza`
  ADD PRIMARY KEY (`idRaza`);

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
  MODIFY `idApareamiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `cerdas`
--
ALTER TABLE `cerdas`
  MODIFY `idCerda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200011;
--
-- AUTO_INCREMENT de la tabla `corrales`
--
ALTER TABLE `corrales`
  MODIFY `idCorral` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1200020;
--
-- AUTO_INCREMENT de la tabla `engordas`
--
ALTER TABLE `engordas`
  MODIFY `idEngorda` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `lactancias`
--
ALTER TABLE `lactancias`
  MODIFY `idLactancia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=500003;
--
-- AUTO_INCREMENT de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `idMedicamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `paginacion`
--
ALTER TABLE `paginacion`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `partos`
--
ALTER TABLE `partos`
  MODIFY `idParto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1300015;
--
-- AUTO_INCREMENT de la tabla `raza`
--
ALTER TABLE `raza`
  MODIFY `idRaza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1200005;
--
-- AUTO_INCREMENT de la tabla `sementales`
--
ALTER TABLE `sementales`
  MODIFY `idCerdo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300004;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `vacunas`
--
ALTER TABLE `vacunas`
  MODIFY `idVacuna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idVenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
