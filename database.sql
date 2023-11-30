
CREATE SCHEMA Proyecto ;


create table Proyecto.consejos (
  id_Consejos INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(30) NOT NULL, /*cada producto tenga su debida categoría*/
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