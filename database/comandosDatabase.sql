CREATE DATABASE DENTAL;


CREATE TABLE USUARIOS(
    idUsuario INT NOT NULL PRIMARY KEY,
    idRole INT(2) NOT NULL, 
    nombre VARCHAR(30) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    contrasenia VARCHAR(30) NOT NULL,
    telefono VARCHAR(10) NOT NULL,
    correo VARCHAR(30) NOT NULL,
    FOREIGN KEY (idRole) REFERENCES ROLES(idRole)
);

CREATE TABLE ROLES(
    idRole INT(3) NOT NULL PRIMARY KEY, 
    tipoRole VARCHAR(30) NOT NULL
);

CREATE TABLE CITAS(
    idCita INT(4) NOT NULL PRIMARY KEY,
    paciente VARCHAR(30) NOT NULL,
    telefono VARCHAR(10) NOT NULL, 
    dentista VARCHAR(30) NOT NULL,
    fecha DATE NOT NULL,
    horario VARCHAR(6) NOT NULL
);
