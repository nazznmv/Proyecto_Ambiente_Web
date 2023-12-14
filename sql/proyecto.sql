create schema proyecto;
use proyecto;

CREATE TABLE `consejos` (
  `id_Consejos` int NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(1024) DEFAULT NULL,
  `comentario` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

ALTER TABLE `consejos`
  ADD PRIMARY KEY (`id_Consejos`);
  
 ALTER TABLE `consejos`
 MODIFY `id_Consejos` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

INSERT INTO `consejos` (`id_Consejos`, `nombre`, `apellidos`, `comentario`) VALUES
(1, 'Maria', 'Lopez', 'Me gusta la plataforma por los conocimientos que puedo adquirir'),
(2, 'Pamela', 'Martinez', 'Los profesores de fidelitas son los mejores'),
(3, 'Julian', 'Rojas', 'Recomiendo fidelitas para estudiar cualquier ingenieria');

/***********************************/
select * from evaluacion;
drop table evaluacion;
CREATE TABLE `evaluacion` (
  `id_evaluacion` int NOT NULL,
  `nombre_docente` varchar(250) NOT NULL,
  `curso` varchar(200) NOT NULL,
  `carrera` varchar(200) NOT NULL,
  `experiencia` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

ALTER TABLE `evaluacion`
  ADD PRIMARY KEY (`id_evaluacion`);

ALTER TABLE `evaluacion`
   MODIFY `id_evaluacion` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
/**************************************/

select * from resenha;
CREATE TABLE `resenha` (
  `id_resenha` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `comentario` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

ALTER TABLE `resenha`
  ADD PRIMARY KEY (`id_resenha`);

ALTER TABLE `resenha`
MODIFY `id_resenha` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;


/*******************************************/
CREATE TABLE `universidad` (
  `id_Universidad` int NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `nivel` bool DEFAULT NULL,
    PRIMARY KEY (id_Universidad)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `universidad` (`id_Universidad`, `nombre`, `nivel`) VALUES
(1, 'Universidad de Costa Rica', 1),
(2, 'Universidad Fidélitas', 0),
(3, 'Universidad Nacional de Costa Rica', 1),
(4, 'Universidad Hispanoamericana', 0),
(5, 'Tecnológico de Costa Rica', 1),
(6, 'Universidad de Ciencias Médicas', 0),
(7, 'Universidad Autónoma de Centro América', 0),
(8, 'Universidad Estatal a Distancia', 1);

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
 
