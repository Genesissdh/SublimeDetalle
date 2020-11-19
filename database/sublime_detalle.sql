-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2020 a las 17:55:23
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sublime_detalle`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `Id_articulo` int(11) NOT NULL,
  `Proveedor_id_proveedor` int(11) NOT NULL,
  `Categoria_articulo_id_categoria_articulo` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(150) DEFAULT NULL,
  `Precio_unidad` int(20) NOT NULL,
  `Itbis` int(20) DEFAULT NULL,
  `Precio_Total` int(20) NOT NULL,
  `Envio` int(20) DEFAULT NULL,
  `Stock` int(20) NOT NULL,
  `Estado_articulo` enum('A','I') NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`Id_articulo`, `Proveedor_id_proveedor`, `Categoria_articulo_id_categoria_articulo`, `Nombre`, `Descripcion`, `Precio_unidad`, `Itbis`, `Precio_Total`, `Envio`, `Stock`, `Estado_articulo`) VALUES
(2, 1, 2, 'Botella de agua 20 onz', 'Botella de agua esmaltada de 20 onz con tapa tipo llavero', 165, 5, 170, 100, 9, 'A'),
(3, 1, 4, 'Taza porcelana 11 onz', 'Taza porcelana blanca para sublimación de 11onz', 50, 5, 55, 100, 8, 'A'),
(4, 1, 4, 'Taza con cuchara 11oz', 'Taza multicolor con cuchara', 145, 5, 150, 100, 100, 'A'),
(5, 1, 4, 'Taza con Asa-Interior de color 11oz', 'Taza con asa y interior multicolor', 80, 5, 85, 100, 100, 'A'),
(6, 1, 4, 'Taza color cambiante (Mágica)', 'Taza porcelana magica', 150, 5, 155, 100, 100, 'A'),
(7, 1, 2, 'Botella de cola 25onz', 'Esmaltada, con condiciones térmicas', 465, 5, 470, 100, 50, 'A'),
(8, 1, 2, 'Jarra Térmica 14onz', 'Jarra termica de 14 onz tipo coffe', 345, 5, 350, 100, 100, 'A'),
(9, 4, 5, 'Portarreatrato A4', 'Portarretrato a4 para imagenes', 125, 5, 130, 100, 50, 'A'),
(10, 4, 5, 'Portarretrato A5', 'Tamaño normal, para fotos y lettering', 100, 10, 110, 100, 50, 'A'),
(11, 1, 5, 'Llaveros plásticos formas variadas', 'plastico comprimido y duradero', 65, 5, 70, 100, 50, 'A'),
(12, 1, 5, 'Bolas Navidad Sublimables', 'Bolas de navidad para insercción de imagenes y lettering', 85, 5, 90, 100, 50, 'A'),
(13, 4, 5, 'Cojín Cuadrado en algodón egipcio', 'Cojin tradicional', 100, 0, 100, 0, 50, 'A'),
(14, 4, 5, 'Cojin en forma de corazón', 'Cojin en piel de melocotón', 100, 30, 130, 100, 50, 'A'),
(15, 1, 1, 'Gorras Trucker', 'Gorras listas para sublimacion y vinil textil', 170, 0, 170, 50, 50, 'A'),
(16, 1, 1, 'Delantal con bolsillos', 'Delantal one size con bolsillos para imagenes y sublimacion', 250, 0, 250, 0, 50, 'A'),
(17, 4, 1, 'T-shirt dri-fi', 'Cuello redonod, diferentes colores, en tela ojo de angel', 150, 0, 150, 0, 100, 'A'),
(18, 4, 1, 'T-shirt Algodon', 'Diferentes colores', 125, 0, 125, 0, 100, 'A'),
(19, 1, 3, 'Rompecabezas rectángular 120pcs', 'en cartón escarchado', 85, 5, 90, 100, 50, 'A'),
(20, 1, 5, 'Destapador metalizado', 'Para diseños pequeños de ambos lados', 85, 5, 90, 100, 25, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_articulo`
--

CREATE TABLE `categoria_articulo` (
  `Id_categoria_articulo` int(11) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Descripcion` varchar(150) DEFAULT NULL,
  `Estado_categoria_articulo` enum('A','I') NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria_articulo`
--

INSERT INTO `categoria_articulo` (`Id_categoria_articulo`, `Nombre`, `Descripcion`, `Estado_categoria_articulo`) VALUES
(1, 'Textiles/ T-shirts', 'Aqui se encontraran todos los articulos realizados con telas', 'A'),
(2, 'Termos ', 'Aqui se tendrán los termos de distintas formas, colores y material, ya sean plasticos o de metal', 'A'),
(3, 'Rompecabezas', 'Rompecabezas de distintas formas y piezas', 'A'),
(4, 'Tazas', 'Tendrá todos los tipos de tazas por colores, tamaños y funciones', 'A'),
(5, 'Regalos', 'Aqui tendran variados articulos para regalos', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Id_cliente` int(11) NOT NULL,
  `Id_usuario` int(11) NOT NULL,
  `Nombre` varchar(75) NOT NULL,
  `Apellido` varchar(75) NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Estado_cliente` enum('A','I') NOT NULL DEFAULT 'A',
  `Comentario` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Id_cliente`, `Id_usuario`, `Nombre`, `Apellido`, `Direccion`, `Telefono`, `Estado_cliente`, `Comentario`) VALUES
(1, 6, 'Emmanuel', 'Portorreal Vasquez', 'Residencial Don Luis Despradel', '829-656-9655', 'A', NULL),
(2, 10, 'Christopher Adhonis', 'Diaz Holguin', 'Camaguey, Las Maras', '829-852-0255', 'A', NULL),
(3, 9, 'Ramon Antonio', 'Diaz Acosta', 'Camaguey, Las Mras', '829-260-1987', 'A', NULL),
(4, 7, 'Mildred Altagracia', 'Holguín Acosta', 'Camaguey, Las Mras', '829-899-5429', 'A', NULL),
(5, 8, 'Wendy', 'Holguin', 'Camaguey,Las Maras', '849-852-7413', 'A', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `Id_empleado` int(11) NOT NULL,
  `Id_rol_empleado` int(11) NOT NULL,
  `Id_usuario` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Estado_empleado` enum('A','I') NOT NULL DEFAULT 'A',
  `Fecha_nacimiento` date NOT NULL,
  `Sexo` enum('F','M') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`Id_empleado`, `Id_rol_empleado`, `Id_usuario`, `Nombre`, `Apellido`, `Estado_empleado`, `Fecha_nacimiento`, `Sexo`) VALUES
(1, 1, 4, 'Genesis Stephania ', 'Diaz Holguin', 'A', '2000-07-10', 'F'),
(2, 2, 5, 'Roberlina Nayeli', 'Caminero Holguin', 'A', '2002-08-15', 'F');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `Cliente_id_cliente` int(11) NOT NULL,
  `Empleado_id_empleado` int(11) NOT NULL,
  `Comentario` text DEFAULT NULL,
  `Fecha_pedido` datetime NOT NULL DEFAULT current_timestamp(),
  `Fecha_entrega` date NOT NULL,
  `Estado_pedido` enum('A','I') NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `Cliente_id_cliente`, `Empleado_id_empleado`, `Comentario`, `Fecha_pedido`, `Fecha_entrega`, `Estado_pedido`) VALUES
(1, 1, 1, 'Termo metálico esmaltado blanco de 20onz ', '2020-10-23 20:45:08', '2020-10-31', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_detalle`
--

CREATE TABLE `pedido_detalle` (
  `id_pedido_detalle` int(11) NOT NULL,
  `Pedido_id_pedido` int(11) NOT NULL,
  `Articulo_id_articulo` int(11) NOT NULL,
  `Color_articulo` enum('Blanco','Negro','Azul','Rosa','Verde','Rojo','Amarillo') NOT NULL DEFAULT 'Blanco',
  `Color_letras` set('Negro','Azul','Blanco','Rosa','Verde','Rojo','Amarillo','Morado') DEFAULT NULL,
  `Imagen_referencia` varchar(200) DEFAULT NULL,
  `Cantidad` int(11) NOT NULL,
  `Envoltura` enum('SI','NO') NOT NULL,
  `Precio_envoltura` int(25) DEFAULT 100,
  `Size_sueter_ninos` enum('0','1','2','4','6','8','10','12','14') DEFAULT NULL,
  `Size_sueter_adultos` enum('16','XS','S','M','L','XL','XXL','XXXL') DEFAULT NULL,
  `Tipo_sueter` enum('Mujer','Hombre') DEFAULT NULL,
  `Size_mascarilla` enum('pequeñas','Medianas','Grandes','Extra Grandes') DEFAULT NULL,
  `Precio` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Comentario` varchar(150) DEFAULT NULL,
  `Estado_pedido_detalle` enum('A','I') NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido_detalle`
--

INSERT INTO `pedido_detalle` (`id_pedido_detalle`, `Pedido_id_pedido`, `Articulo_id_articulo`, `Color_articulo`, `Color_letras`, `Imagen_referencia`, `Cantidad`, `Envoltura`, `Precio_envoltura`, `Size_sueter_ninos`, `Size_sueter_adultos`, `Tipo_sueter`, `Size_mascarilla`, `Precio`, `Total`, `Comentario`, `Estado_pedido_detalle`) VALUES
(2, 1, 2, 'Blanco', 'Negro', 'Novio', 1, 'NO', NULL, NULL, NULL, 'Mujer', 'pequeñas', 450, 450, 'Botella de agua con imagen de Gym y una iamgen de la persona', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `Nombre` varchar(75) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Direccion` varchar(150) NOT NULL,
  `Descripcion` varchar(150) DEFAULT NULL,
  `Pag_web` varchar(100) DEFAULT NULL,
  `Estado_proveedor` enum('A','I') NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `Nombre`, `Telefono`, `Direccion`, `Descripcion`, `Pag_web`, `Estado_proveedor`) VALUES
(1, 'Tekgraf', '829-521-1992', 'Av. Estrella Sadhalá #75, Santiago De Los Caballeros 51000', 'Tekgraf es una compañia dedicada a la venta de Equipos y Materiales para impresión digital, rotulación, sublimación, transfer, plotter, corte entre ot', 'https://www.tekgraf.com.do/', 'A'),
(2, 'EmiGroup Rd', '829-532-4365', 'Calle Buen Pastor #8, Santo Domingo. República Dominicana.', 'Empresa dedicada a la distribución de productos en distintas áreas, para las necesidades en tus negocios.\r\nSuplidora para maquina de corte Cricut', 'https://emigrouprd.com/', 'A'),
(4, 'M&T confecciones', '829-260-1987', 'Camaguey, las maras C/P', 'Empresa dedicada a la confeccion y realizacion de productos textiles', NULL, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_empleado`
--

CREATE TABLE `rol_empleado` (
  `Id_rol_empleado` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Estado_rol` enum('A','I') NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol_empleado`
--

INSERT INTO `rol_empleado` (`Id_rol_empleado`, `Nombre`, `Descripcion`, `Estado_rol`) VALUES
(1, 'Propietario', 'Creadora de toda la empresa desde cero', 'A'),
(2, 'Diseñadora pag.web', 'Socia para la creacion de la pag.web de la empresa', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_acceso`
--

CREATE TABLE `tipo_acceso` (
  `Id_tipo_acceso` int(11) NOT NULL,
  `Nivel` enum('Admin','User','Empleado') NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Estado_tipo_acceso` enum('A','I') NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_acceso`
--

INSERT INTO `tipo_acceso` (`Id_tipo_acceso`, `Nivel`, `Descripcion`, `Estado_tipo_acceso`) VALUES
(1, 'Admin', 'Poseerá todos los privilegios del sistema', 'A'),
(2, 'User', 'Solo tendrá el privilegio de ver y comprar nuestros articulos', 'A'),
(3, 'Empleado', 'Este tendra acceso a los reportes necesarios para la toma de decisiones', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id_usuario` int(11) NOT NULL,
  `Id_tipo_acceso` int(11) NOT NULL,
  `Usuario` varchar(75) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Estado_usuario` enum('A','I') NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_usuario`, `Id_tipo_acceso`, `Usuario`, `Password`, `Estado_usuario`) VALUES
(4, 1, 'GénesisDH', 'genesis10221', 'A'),
(5, 1, 'RoberlinaCH', 'nayeli123', 'A'),
(6, 2, 'EmmanuelPV', '123456', 'A'),
(7, 2, 'MildredHA', 'mildred123', 'A'),
(8, 2, 'WendyHH', 'wendy123', 'A'),
(9, 2, 'TonyDA', 'Tony123', 'A'),
(10, 2, 'ChristopherDH', 'crio123', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`Id_articulo`) USING BTREE,
  ADD KEY `Proveedor_id_proveedor` (`Proveedor_id_proveedor`),
  ADD KEY `Categoria_articulo_id_categoria_articulo` (`Categoria_articulo_id_categoria_articulo`);

--
-- Indices de la tabla `categoria_articulo`
--
ALTER TABLE `categoria_articulo`
  ADD PRIMARY KEY (`Id_categoria_articulo`) USING BTREE;

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id_cliente`) USING BTREE,
  ADD KEY `Id_usuario` (`Id_usuario`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`Id_empleado`),
  ADD KEY `Empleado_Id_rol_empleado` (`Id_rol_empleado`),
  ADD KEY `Id_usuario` (`Id_usuario`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `Cliente_id_cliente` (`Cliente_id_cliente`),
  ADD KEY `Empleado_id_empleado` (`Empleado_id_empleado`);

--
-- Indices de la tabla `pedido_detalle`
--
ALTER TABLE `pedido_detalle`
  ADD PRIMARY KEY (`id_pedido_detalle`),
  ADD KEY `Articulo_id_articulo` (`Articulo_id_articulo`),
  ADD KEY `Pedido_id_pedido` (`Pedido_id_pedido`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `rol_empleado`
--
ALTER TABLE `rol_empleado`
  ADD PRIMARY KEY (`Id_rol_empleado`);

--
-- Indices de la tabla `tipo_acceso`
--
ALTER TABLE `tipo_acceso`
  ADD PRIMARY KEY (`Id_tipo_acceso`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_usuario`),
  ADD KEY `Id_tipo_acceso` (`Id_tipo_acceso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `Id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `categoria_articulo`
--
ALTER TABLE `categoria_articulo`
  MODIFY `Id_categoria_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `Id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pedido_detalle`
--
ALTER TABLE `pedido_detalle`
  MODIFY `id_pedido_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rol_empleado`
--
ALTER TABLE `rol_empleado`
  MODIFY `Id_rol_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_acceso`
--
ALTER TABLE `tipo_acceso`
  MODIFY `Id_tipo_acceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `articulo_ibfk_1` FOREIGN KEY (`Proveedor_id_proveedor`) REFERENCES `proveedor` (`id_proveedor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `articulo_ibfk_2` FOREIGN KEY (`Categoria_articulo_id_categoria_articulo`) REFERENCES `categoria_articulo` (`Id_categoria_articulo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `usuario` (`Id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `Empleado_Id_rol_empleado` FOREIGN KEY (`Id_rol_empleado`) REFERENCES `rol_empleado` (`Id_rol_empleado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `usuario` (`Id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`Empleado_id_empleado`) REFERENCES `empleado` (`Id_empleado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`Cliente_id_cliente`) REFERENCES `cliente` (`Id_cliente`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedido_detalle`
--
ALTER TABLE `pedido_detalle`
  ADD CONSTRAINT `pedido_detalle_ibfk_1` FOREIGN KEY (`Pedido_id_pedido`) REFERENCES `pedido` (`id_pedido`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_detalle_ibfk_2` FOREIGN KEY (`Articulo_id_articulo`) REFERENCES `articulo` (`id_articulo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`Id_tipo_acceso`) REFERENCES `tipo_acceso` (`Id_tipo_acceso`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
