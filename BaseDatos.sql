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


-- Datos de ejemplo para la tabla de usuarios
INSERT INTO usuarios (id_usuario, nombre_completo, correo, contrasena, rol, edad)
VALUES
    (1, 'Juan Pérez', 'juan@example.com', 'contraseña123', 'admin', 30),
    (2, 'María García', 'maria@example.com', 'clave456', 'cliente', 25),
    (3, 'Carlos Rodríguez', 'carlos@example.com', 'secreto789', 'cliente', 40),
    -- ... Agrega más datos según sea necesario ...

-- Datos de ejemplo para la tabla de clientes
INSERT INTO clientes (id_cliente, id_usuario, nombre_completo, telefono, direccion, edad)
VALUES
    (1, 1, 'Juan Pérez', '555-1234', 'Calle A #123', 30),
    (2, 2, 'María García', '555-5678', 'Av. Principal #456', 25),
    (3, 3, 'Carlos Rodríguez', '555-9012', 'Calle B #789', 40),
    -- ... Agrega más datos según sea necesario ...

-- Datos de ejemplo para la tabla de pedidos
INSERT INTO pedidos (id_pedido, id_cliente, fecha_pedido, estado)
VALUES
    (1, 1, '2023-01-01', 'En proceso'),
    (2, 2, '2023-02-15', 'Entregado'),
    (3, 3, '2023-03-30', 'Pendiente'),
    -- ... Agrega más datos según sea necesario ...

-- Datos de ejemplo para la tabla de categorías
INSERT INTO categorias (id_categoria, nombre)
VALUES
    (1, 'Bebidas'),
    (2, 'Platillos'),
    -- ... Agrega más datos según sea necesario ...

-- Datos de ejemplo para la tabla de reservas
INSERT INTO reservas (id_reserva, id_cliente, fecha_reserva, hora_reserva, id_mesa, estado)
VALUES
    (1, 1, '2023-01-05', '18:00:00', 101, 'Confirmada'),
    (2, 2, '2023-02-20', '19:30:00', 102, 'Pendiente'),
    (3, 3, '2023-04-05', '20:45:00', 103, 'Cancelada'),
    -- ... Agrega más datos según sea necesario ...

-- Datos de ejemplo para la tabla de bebidas
INSERT INTO bebidas (id_bebida, nombre, descripcion, precio, id_categoria, imagen_url)
VALUES
    (1, 'Refresco', 'Bebida carbonatada', 2.50, 1, 'url_refresco.jpg'),
    (2, 'Jugo de naranja', '100% natural', 3.00, 1, 'url_jugo.jpg'),
    -- ... Agrega más datos según sea necesario ...

-- Datos de ejemplo para la tabla de platillos
-- Datos de ejemplo para la tabla de platillos
INSERT INTO platillos (id_platillo, nombre, descripcion, precio, id_categoria, imagen_url)
VALUES
    (1, 'Tacos al Pastor', 'Deliciosos tacos tradicionales de pastor marinado con especias y adobo, servidos en tortillas de maíz.', 10.99, 2, 'https://www.comedera.com/wp-content/uploads/2017/08/tacos-al-pastor-receta.jpg'),
    (2, 'Chiles Rellenos', 'Chiles poblanos rellenos de una mezcla de carne y/o queso, cubiertos con salsa de tomate y gratinados con queso.', 12.99, 2, 'https://i.pinimg.com/originals/d2/bc/26/d2bc260efda31c07533d1d76a51534ee.jpg'),
    (3, 'Enchiladas Verdes', 'Tortillas de maíz rellenas de pollo deshebrado, bañadas en salsa verde y adornadas con crema y queso.', 9.99, 2, 'https://i.pinimg.com/originals/d2/bc/26/d2bc260efda31c07533d1d76a51534ee.jpg'),
    (4, 'Mole Poblano', 'Platillo tradicional mexicano hecho a base de chiles, especias y chocolate, servido con pollo y acompañado de arroz y tortillas.', 14.99, 2, 'https://www.seriouseats.com/thmb/TOQrlZhSHX6NwXXOT7vAIY7pMLY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/__opt__aboutcom__coeus__resources__content_migration__serious_eats__seriouseats.com__recipes__images__2012__10__20121024-227412-mole-poblano-8aa343f2cb384508834ed888a4b65df2.jpg'),
    (5, 'Tamales Oaxaqueños', 'Deliciosos tamales hechos con masa de maíz, rellenos de pollo o cerdo y envueltos en hojas de plátano.', 8.99, 2, 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/68D64DAE-9605-42AC-BDCF-328A509EC776/Derivates/7AC0E9FD-F0DA-410B-9D78-19D3C3BEA1F3.jpg'),
    (6, 'Pozole', 'Sopa tradicional mexicana hecha a base de maíz cacahuazintle, carne de cerdo, chile y condimentos, acompañada de lechuga, rábano y cebolla.', 11.99, 2, 'https://editorialtelevisa.brightspotcdn.com/dims4/default/6c34d26/2147483647/strip/true/crop/440x440+63+0/resize/1000x1000!/format/webp/quality/90/?url=https%3A%2F%2Fk2-prod-editorial-televisa.s3.amazonaws.com%2Fbrightspot%2Fwp-content%2Fuploads%2F2018%2F03%2FSTPozole-rojo-de-cerdo.jpg'),
    (7, 'Chiles en Nogada', 'Platillo típico mexicano compuesto por chiles poblanos rellenos de picadillo y cubiertos con una salsa de nuez y granada.', 15.99, 2, 'https://media.istockphoto.com/id/491811072/es/foto/chiles-en-nogada-comida-mexicana.jpg?s=612x612&w=is&k=20&c=wFRoQmLkubqojygfRmCkyBiAxaegn_5Jn7zi2FXP3Xg='),
    (8, 'Cochinita Pibil', 'Platillo de la cocina yucateca hecho con carne de cerdo adobada en achiote y cocida a fuego lento, acompañada de cebolla encurtida y tortillas.', 13.99, 2, 'https://i2.wp.com/portandfin.com/wp-content/uploads/2015/01/CochinitaPibil7.jpg'),
    (9, 'Tacos de Carnitas', 'Tacos de carne de cerdo cocida lentamente en su propia grasa hasta quedar dorada y crujiente, servidos con cebolla y cilantro.', 10.99, 2, 'https://okdiario.com/img/2022/04/30/tacos.jpg'),
    (10, 'Quesadillas', 'Tortillas de maíz rellenas de queso derretido y acompañadas de salsa y guacamole.', 7.99, 2, 'https://www.cocinista.es/download/bancorecursos/recetas/receta-quesadilla.jpg'),
    (11, 'Tortas Ahogadas', 'Torta de birote rellena de carnitas de cerdo y bañada en una salsa de chile de árbol, acompañada de cebolla y limón.', 9.99, 2, 'https://dorastable.com/wp-content/uploads/2017/04/torta-ahogada-3-1030x682.jpg'),
    (12, 'Tostadas de Tinga', 'Tostadas de tortilla crujiente cubiertas con pollo deshebrado en salsa de chipotle, acompañadas de crema, queso y lechuga.', 8.99, 2, 'https://www.mylatinatable.com/wp-content/uploads/2014/02/foto-h-750x500.jpg.webp'),
    (13, 'Sopes', 'Tortillas de maíz con los bordes levantados, cubiertas con frijoles, carne, queso, crema y salsa.', 9.99, 2, 'https://th.bing.com/th/id/OIP.nIyzeNF1iZjzl0qA74i3EgHaE7?pid=ImgDet&rs=1'),
    (14, 'Chilaquiles', 'Tortillas de maíz cortadas y fritas, bañadas en salsa verde o roja, acompañadas de crema, queso y cebolla.', 8.99, 2, 'https://images.pexels.com/photos/10305696/pexels-photo-10305696.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
    (15, 'Flautas', 'Tortillas de maíz enrolladas y rellenas de carne de pollo o res, fritas hasta quedar crujientes, acompañadas de crema y guacamole.', 9.99, 2, 'https://www.maricruzavalos.com/wp-content/uploads/2019/09/chicken-flautas-recipe-1024x1024.jpg');


-- Datos de ejemplo para la tabla de comentarios y valoraciones
INSERT INTO comentarios_valoraciones (id_comentario, id_cliente, comentario, valoracion)
VALUES
    (1, 1, '¡Excelente servicio!', 5),
    (2, 2, 'La comida estuvo deliciosa', 4),
    -- ... Agrega más datos según sea necesario ...

-- Datos de ejemplo para la tabla de historial de pedidos y reservas
INSERT INTO historial_pedidos_reservas (id_historial, id_cliente, id_pedido, id_reserva, fecha_historial, descripcion)
VALUES
    (1, 1, 1, NULL, '2023-01-10', 'Pedido completado'),
    (2, 2, NULL, 2, '2023-02-25', 'Reserva cancelada'),
    -- ... Agrega más datos según sea necesario ...
