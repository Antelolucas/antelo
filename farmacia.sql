-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2025 a las 18:16:29
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `farmacia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_Categoria` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_Categoria`, `Nombre`, `Descripcion`) VALUES
(1, 'Tabletas', 'Forma farmacéutica sólida que contiene el principi'),
(2, 'Jarabe', 'Preparación líquida, generalmente azucarada, que c'),
(3, 'Inyectables', 'Soluciones o suspensiones estériles destinadas a s'),
(4, 'Pastillas', 'Forma farmacéutica sólida, generalmente de pequeño'),
(5, 'Cápsulas', 'Forma farmacéutica sólida en la que el principio a'),
(6, 'Solución', 'Preparación líquida homogénea en la que el princip'),
(7, 'Suspensión', 'Preparación líquida en la que partículas sólidas f'),
(8, 'Óvulos', 'Forma farmacéutica sólida de administración vagina'),
(9, 'Supositorios', 'Forma farmacéutica sólida de administración rectal'),
(10, 'Crema', 'Preparación semisólida para aplicación tópica.'),
(11, 'Gel', 'Preparación semisólida transparente o translúcida '),
(12, 'Loción', 'Preparación líquida para aplicación tópica.'),
(13, 'Parche', 'Sistema transdérmico que libera el principio activ'),
(14, 'Gotas', 'Preparación líquida para administración en ojos, o'),
(15, 'Polvo', 'Forma farmacéutica sólida constituida por partícul');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(20) NOT NULL,
  `Nombre` varchar(10) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `genero` text NOT NULL,
  `Direccion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `Nombre`, `Apellido`, `telefono`, `genero`, `Direccion`) VALUES
(1, 'lucas', 'antelo', '12345689', 'Masculino', '2025-05-29'),
(2, 'lucas', 'antelo', '12345689', 'Masculino', 'Av/el trillo'),
(3, 'lucas', 'antelo', '12345689', 'Masculino', 'av/lujan'),
(4, '', '', '', '', ''),
(5, 'alejandro', 'cordero', '12345689', 'Masculino', 'Av/el trillo'),
(6, '', '', '', '', ''),
(7, 'alejandro', 'antelo', '12345689', 'Masculino', 'Av/el trillo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id_Medicamento` int(11) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `id_detalleVenta` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamento`
--

CREATE TABLE `medicamento` (
  `id_Medicamento` int(10) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha_registro` date NOT NULL,
  `cantidad` int(10) NOT NULL,
  `costo` int(10) NOT NULL,
  `codigo_barra` varchar(50) NOT NULL,
  `id_categoria` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_Categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id_detalleVenta`),
  ADD KEY `id_medicamento` (`id_Medicamento`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `medicamento`
--
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`id_Medicamento`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_Categoria` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id_detalleVenta` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `medicamento`
--
ALTER TABLE `medicamento`
  MODIFY `id_Medicamento` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `detalle_venta_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `medicamento`
--
ALTER TABLE `medicamento`
  ADD CONSTRAINT `medicamento_ibfk_1` FOREIGN KEY (`id_Medicamento`) REFERENCES `detalle_venta` (`id_medicamento`),
  ADD CONSTRAINT `medicamento_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_Categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
