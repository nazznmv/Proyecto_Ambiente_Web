--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('josethmontero06@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regristo`
--

CREATE TABLE `regristo` (
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `regristo`
--

INSERT INTO `regristo` (`nombre`, `apellidos`, `correo`, `password`) VALUES
('Joseth', 'Montero', 'fio234@gmail.com', '12345');
COMMIT;


--
-- Estructura de tabla para la tabla `consejos`
--

create table Proyecto.consejos (
  id_Consejos INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(30) NOT NULL, 
  apellidos varchar(1024),
  comentario varchar(1024),
  PRIMARY KEY (id_Consejos)
  
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;
INSERT INTO  Proyecto.consejos ( id_Consejos, nombre, apellidos,comentario) VALUES 
(1,'Maria','Lopez','Me gusta la plataforma por los conocimientos que puedo adquirir',true),
(2,'Pamela','Martinez','Los profesores de fidelitas son los mejores',true),
(3,'Julian','Rojas','Recomiendo fidelitas para estudiar cualquier ingenieria',true);
