CREATE DATABASE RESTAURANTE;
USE RESTAURANTE;
 
-- DROP DATABASE RESTAURANTE;
-- Crear la tabla de usuarios
CREATE TABLE usuarios (
    id_usuario INT PRIMARY KEY,
    nombre_completo VARCHAR(255),
    correo VARCHAR(255),
    contrasena VARCHAR(255),
    rol VARCHAR(50),
    edad INT
);

select * from usuarios;
-- Crear la tabla de clientes
CREATE TABLE clientes (
    id_cliente INT PRIMARY KEY,
    id_usuario INT,
	nombre_completo VARCHAR(255),
    telefono VARCHAR(20),
    direccion VARCHAR(255),
    edad INT,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
);

-- Crear la tabla de pedidos
CREATE TABLE pedidos (
    id_pedido INT PRIMARY KEY,
    id_cliente INT,
    fecha_pedido DATE,
    estado VARCHAR(50),
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente)
);

-- Crear la tabla de mesas
CREATE TABLE mesas (
    id_mesa INT PRIMARY KEY,
    numero_mesa INT,
    capacidad INT,
    disponible BOOLEAN
);

-- Crear la tabla de categorias
CREATE TABLE categorias (
    id_categoria INT PRIMARY KEY,
    nombre VARCHAR(255)
);

-- Crear la tabla de reservas
CREATE TABLE reservas (
    id_reserva INT PRIMARY KEY,
    id_cliente INT,
    fecha_reserva DATE,
    hora_reserva TIME,
    id_mesa INT,
    estado VARCHAR(50),
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente),
    FOREIGN KEY (id_mesa) REFERENCES mesas(id_mesa)
);

-- Crear la tabla de bebidas
CREATE TABLE bebidas (
    id_bebida INT PRIMARY KEY,
    nombre VARCHAR(255),
    descripcion TEXT,
    precio DECIMAL(8,2),
    id_categoria INT,
    imagen_url VARCHAR(255),
    FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria)
);

-- Crear la tabla de platillos
CREATE TABLE platillos (
    id_platillo INT PRIMARY KEY,
    nombre VARCHAR(255),
    descripcion TEXT,
    precio DECIMAL(8,2),
    id_categoria INT,
    imagen_url VARCHAR(255),
    FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria)
);


-- Crear la tabla de comentarios y valoraciones
CREATE TABLE comentarios_valoraciones (
    id_comentario INT PRIMARY KEY,
    id_cliente INT,
    comentario TEXT,
    valoracion INT,
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente)
);

-- Crear la tabla de historial de pedidos y reservas
CREATE TABLE historial_pedidos_reservas (
    id_historial INT PRIMARY KEY,
    id_cliente INT,
    id_pedido INT,
    id_reserva INT,
    fecha_historial DATE,
    descripcion TEXT,
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente),
    FOREIGN KEY (id_pedido) REFERENCES pedidos(id_pedido),
    FOREIGN KEY (id_reserva) REFERENCES reservas(id_reserva)
);
