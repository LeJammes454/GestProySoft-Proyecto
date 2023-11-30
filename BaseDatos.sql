CREATE DATABASE RESTAURANTE;
USE RESTAURANTE;

-- DROP DATABASE RESTAURANTE;
-- Crear la tabla de usuarios
CREATE TABLE usuarios (
    id_usuario INT PRIMARY KEY,
    nombre VARCHAR(255),
    correo VARCHAR(255),
    contrasena VARCHAR(255),
    rol VARCHAR(50)
);

-- Crear la tabla de clientes
CREATE TABLE clientes (
    id_cliente INT PRIMARY KEY,
    id_usuario INT,
    telefono VARCHAR(20),
    direccion VARCHAR(255),
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

-- Insertar datos en la tabla de usuarios
INSERT INTO usuarios (id_usuario, nombre, correo, contrasena, rol)
VALUES
    (1, 'Admin Usuario', 'admin@example.com', 'admin123', 'administrador'),
    (2, 'Cliente Prueba', 'cliente@example.com', 'cliente123', 'cliente');

-- Insertar datos en la tabla de clientes
INSERT INTO clientes (id_cliente, id_usuario, telefono, direccion)
VALUES
    (1, 2, '123456789', 'Calle Principal 123');

-- Insertar datos en la tabla de pedidos
INSERT INTO pedidos (id_pedido, id_cliente, fecha_pedido, estado)
VALUES
    (1, 1, '2023-01-01', 'en proceso'),
    (2, 1, '2023-02-01', 'entregado');

-- Insertar datos en la tabla de reservas
INSERT INTO reservas (id_reserva, id_cliente, fecha_reserva, hora_reserva, id_mesa, estado)
VALUES
    (1, 1, '2023-03-01', '18:00:00', 1, 'confirmada'),
    (2, 1, '2023-04-01', '19:30:00', 2, 'pendiente');

-- Insertar datos en la tabla de bebidas
INSERT INTO bebidas (id_bebida, nombre, descripcion, precio, id_categoria, imagen_url)
VALUES
    (1, 'Coca Cola', 'Refresco de cola', 2.50, 1, 'https://example.com/cocacola.jpg'),
    (2, 'Agua Mineral', 'Agua sin gas', 1.50, 1, 'https://example.com/agua.jpg');

-- Insertar datos en la tabla de platillos
INSERT INTO platillos (id_platillo, nombre, descripcion, precio, id_categoria, imagen_url)
VALUES
    (1, 'Pizza Margarita', 'Pizza con tomate, mozzarella y albahaca', 10.99, 2, 'https://example.com/pizza.jpg'),
    (2, 'Pasta Alfredo', 'Pasta con salsa Alfredo', 8.99, 2, 'https://example.com/pasta.jpg');

-- Insertar datos en la tabla de mesas
INSERT INTO mesas (id_mesa, numero_mesa, capacidad, disponible)
VALUES
    (1, 101, 4, TRUE),
    (2, 102, 6, TRUE);

-- Insertar datos en la tabla de categorías
INSERT INTO categorias (id_categoria, nombre)
VALUES
    (1, 'Bebidas'),
    (2, 'Platillos');

-- Insertar datos en la tabla de comentarios y valoraciones
INSERT INTO comentarios_valoraciones (id_comentario, id_cliente, comentario, valoracion)
VALUES
    (1, 1, '¡Excelente servicio!', 5),
    (2, 1, 'La comida estaba deliciosa', 4);

-- Insertar datos en la tabla de historial de pedidos y reservas
INSERT INTO historial_pedidos_reservas (id_historial, id_cliente, id_pedido, id_reserva, fecha_historial, descripcion)
VALUES
    (1, 1, 1, NULL, '2023-05-01', 'Historial de pedido generado automáticamente'),
    (2, 1, NULL, 2, '2023-06-01', 'Historial de reserva generado automáticamente');
