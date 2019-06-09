CREATE DATABASES people;

CREATE TABLE usuario (
IdUsuario varchar(10),
nombre varchar(30),
contrasena varchar(30),
correo varchar(30),
sexo varchar(10),
fechaNacimiento varchar(30)
);

INSERT INTO usuario (IdUsuario, nombre, contrasena, correo, sexo, fechaNacimiento)
VALUES ('USER01', 'Jonathan', '4rijri4r', 'jonathan@gmail.com', 'Hombre', '01-Febrero-1997');

INSERT INTO usuario (IdUsuario, nombre, contrasena, correo, sexo, fechaNacimiento)
VALUES ('USER02', 'Dorian', 'dfi4nfoi', 'dorian@gmail.com', 'Hombre', '18-Octubre-2018');

INSERT INTO usuario (IdUsuario, nombre, contrasena, correo, sexo, fechaNacimiento)
VALUES ('USER03', 'Omar', 'iedjeijd', 'omar@gmail.com', 'Hombre', '19-Septiembre-1991');

INSERT INTO usuario (IdUsuario, nombre, contrasena, correo, sexo, fechaNacimiento)
VALUES ('USER04', 'Micaela', 'j49834jf', 'micaela@gmail.com', 'Mujer', '11-Agosto-1995');

INSERT INTO usuario (IdUsuario, nombre, contrasena, correo, sexo, fechaNacimiento)
VALUES ('USER05', 'Andrea', 'oi4ji4h', 'andrea@gmail.com', 'Mujer', '21-Mayo-1998');

