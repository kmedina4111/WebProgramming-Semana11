CREATE DATABASE IF NOT EXISTS db_academico;
USE db_academico;

CREATE TABLE t_curso (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombrecurso VARCHAR(100) NOT NULL
);

CREATE TABLE t_alumno (
    id_alumno INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    ap_paterno VARCHAR(100) NOT NULL,
    ap_materno VARCHAR(100) NOT NULL,
    t_curso_id INT NULL,
    CONSTRAINT fk_alumno_curso 
        FOREIGN KEY (t_curso_id) 
        REFERENCES t_curso(id)
        ON UPDATE CASCADE
        ON DELETE SET NULL
);

INSERT INTO t_curso (id, nombrecurso) VALUES
(1, 'Desarrollo Web con PHP 8'),
(2, 'Base de Datos MySQL y PDO'),
(3, 'JavaScript y Frontend'),
(4, 'Programación Orientada a Objetos'),
(5, 'Arquitectura y Servicios Web');

INSERT INTO t_alumno (id_alumno, nombre, ap_paterno, ap_materno, t_curso_id) VALUES
(1, 'Carlos Alberto', 'Mendoza', 'Ríos', 1),
(2, 'Ana Sofía', 'Gómez', 'Torres', 1),
(3, 'Luis Fernando', 'Silva', 'Vargas', 2),
(4, 'María Elena', 'Rojas', 'Castro', 3),
(5, 'Kevin Alexander', 'Pérez', 'Suárez', 4);