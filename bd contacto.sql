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

create table Producto(
id int auto_increment primary key,
nombre_producto varchar(45),
modelo varchar(45),
imagen varchar(150)
);

select *from Producto;

create table gimnasio(
id int primary key auto_increment,
nombre varchar(45),
latitud double,
longitud double,
imagen varchar(150));

create table usuario(
id int primary key auto_increment,
nombre_usuario varchar(45),
clave varchar(150),
rol varchar (15),
imagen varchar(30)
);
