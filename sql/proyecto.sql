-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2023 a las 23:41:30
-- Versión del servidor: 8.0.32
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consejos`
--

CREATE TABLE `consejos` (
  `id_Consejos` int NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(1024) DEFAULT NULL,
  `comentario` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `consejos`
--

INSERT INTO `consejos` (`id_Consejos`, `nombre`, `apellidos`, `comentario`) VALUES
(1, 'Maria', 'Lopez', 'Me gusta la plataforma por los conocimientos que puedo adquirir'),
(2, 'Pamela', 'Martinez', 'Los profesores de fidelitas son los mejores'),
(3, 'Julian', 'Rojas', 'Recomiendo fidelitas para estudiar cualquier ingenieria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion`
--

CREATE TABLE `evaluacion` (
  `id_evaluacion` int NOT NULL,
  `nombre_docente` varchar(250) NOT NULL,
  `curso` varchar(200) NOT NULL,
  `carrera` varchar(200) NOT NULL,
  `experiencia` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
-------------------------------------------------------

create table proyecto.registro (
  id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(30) NOT NULL, 
  apellidos VARCHAR(30) NOT NULL, 
  correo VARCHAR(150) NOT NULL,
  password VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;
 
INSERT INTO proyecto.registro (id, nombre,apellidos,correo, password) VALUES
(1, 'Melani','Espinoza','espinozamelani290@gmail.com', '$2y$10$aSd3XnFvGAoPftKYmDwe9ePGG2zWZIYCTDmKDDcyKVRDesaQO75Xm');
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resenha`
--

CREATE TABLE `resenha` (
  `id_resenha` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `comentario` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consejos`
--
ALTER TABLE `consejos`
  ADD PRIMARY KEY (`id_Consejos`);

--
-- Indices de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD PRIMARY KEY (`id_evaluacion`);

--
-- Indices de la tabla `resenha`
--
ALTER TABLE `resenha`
  ADD PRIMARY KEY (`id_resenha`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consejos`
--
ALTER TABLE `consejos`
  MODIFY `id_Consejos` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
