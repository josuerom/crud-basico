CREATE DATABASE IF NOT EXISTS biblioteca;
USE biblioteca;

CREATE TABLE libros (
    id int(11) NOT NULL,
    nombre varchar(50),
    autor varchar(50),
    telefono varchar(50),
    direccion varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

ALTER TABLE libros ADD PRIMARY KEY (id);
ALTER TABLE libros MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;