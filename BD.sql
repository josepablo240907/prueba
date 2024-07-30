Create database inm;
Use inm;
CREATE TABLE Alumno(
id INT AUTO_INCREMENT PRIMARY KEY,
primer_nombre VARCHAR(50),
segundo_nombre VARCHAR(50),
primer_apellido VARCHAR(50),
segundo_apellido VARCHAR(50),
genero ENUM('masculino', 'femenino'),
edad int,
fecha_nacimiento date,
telefono_emergencia int,
direccion VARCHAR(150)
)engine=InnoDB;

create table Curso(
id int auto_increment primary key,
nombre_curso varchar(70),
turno varchar(20),
hora_inicio time,
hora_termina time
)engine=InnoDB;

create table Matricula(
id int auto_increment primary key,
alumno_id_alumno int not null,
curso_id_curso int not null,
axo_lectivo int not null,
foreign key(alumno_id_alumno)references Alumno(id) on update cascade on delete cascade,
foreign key(curso_id_curso) references Curso(id) on update cascade on delete cascade
)engine=InnoDB;

select *from matricula;
select primer_nombre, segundo_nombre, primer_apellido,segundo_apellido from Alumno;

INSERT INTO `inm`.`alumno` (`primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `genero`, `edad`, `fecha_nacimiento`, `telefono_emergencia`, `direccion`) VALUES ('Rodrigo', 'Josue', 'Molina', 'Torrez', 'masculino', '26', '26/03/1998', '57016312', 'sector #9');
