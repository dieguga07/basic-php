<?php
// Datos de conexión a la base de datos
$host = 'localhost';
$usuario = 'diego'; 
$contrasena = 'diego'; 
$base_de_datos = 'mysql'; 

// Conexión a la base de datos
$conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consultas para crear las tablas
$sql_coche = "CREATE TABLE Coche (
    id INT(10) AUTO_INCREMENT PRIMARY KEY,
    Modelo VARCHAR(100),
    Marca VARCHAR(50),
    Precio INT,
    Stock INT
)";

$sql_cliente = "CREATE TABLE Cliente (
    id INT(10) AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(100),
    Ciudad VARCHAR(100)
)";

$sql_encargos = "CREATE TABLE Encargos (
    coche_id INT(10),
    cliente_id INT(10),
    Cantidad INT,
    Gastado FLOAT(10,2),
    Fecha DATE,
    FOREIGN KEY (coche_id) REFERENCES Coche(id),
    FOREIGN KEY (cliente_id) REFERENCES Cliente(id)
)";

// Ejecutar las consultas 
if ($conexion->query($sql_coche) === TRUE) {
    echo "Tabla Coche creada correctamente.\n";
} else {
    echo "Error al crear la tabla Coche: " . $conexion->error . "\n";
}

if ($conexion->query($sql_cliente) === TRUE) {
    echo "Tabla Cliente creada correctamente.\n";
} else {
    echo "Error al crear la tabla Cliente: " . $conexion->error . "\n";
}

if ($conexion->query($sql_encargos) === TRUE) {
    echo "Tabla Encargos creada correctamente.\n";
} else {
    echo "Error al crear la tabla Encargos: " . $conexion->error . "\n";
}

$conexion->close();