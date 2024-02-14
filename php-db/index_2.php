<!-- CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    edad INT,
    direccion VARCHAR(255)
); -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concesionario de Coches</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>

        <h1>Concesionario de Coches</h1>
    </header>

    <section>

        <h2>Iniciar Sesión</h2>
        <form action="login.php" method="post">
            <label for="email_login">Email:</label>
            <input type="email" id="email_login" name="email_login" required><br><br>
            <label for="password_login">Contraseña:</label>
            <input type="password" id="password_login" name="password_login" required><br><br>
            <input type="submit" value="Iniciar Sesión">
        </form>

        <h2>Registrarse</h2>
        <form action="registro.php" method="post">
            <label for="email_registro">Email:</label>
            <input type="email" id="email_registro" name="email_registro" required><br><br>
            <label for="password_registro">Contraseña:</label>
            <input type="password" id="password_registro" name="password_registro" required><br><br>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" required><br><br>
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad"><br><br>
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion"><br><br>
            <input type="submit" value="Registrarse">
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Concesionario de Coches</p>
    </footer>
</body>
</html>
