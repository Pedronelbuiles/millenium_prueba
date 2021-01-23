CREATE DATABASE personas;
USE personas;
CREATE TABLE persona (
    id INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(20) NOT NULL,
    apellido VARCHAR(20) NOT NULL,
    PRIMARY KEY(id)
);
