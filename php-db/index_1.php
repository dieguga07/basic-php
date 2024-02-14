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

    <nav>

        <ul>
            <li><a href="#principal">Principal</a></li>
            <li><a href="#insertar">Insertar Coche</a></li>
        </ul>
    </nav>

    <section id="principal">
 
        <h2>Listado de Coches</h2>
      
        <table>
            <tr>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Acciones</th>
            </tr>
            <tr>
                <td>Coche 1</td>
                <td>Marca 1</td>
                <td><a href="editar_coche.php?id=1"><img src="editar.png" alt="Editar"></a> <a href="borrar_coche.php?id=1"><img src="borrar.png" alt="Borrar"></a></td>
            </tr>
    
        </table>
    </section>

    <section id="insertar">

        <h2>Insertar Coche</h2>
        <form action="insertar_coche.php" method="POST">
            <label for="modelo">Modelo:</label>
            <input type="text" id="modelo" name="modelo" required><br><br>
            <label for="marca">Marca:</label>
            <input type="text" id="marca" name="marca" required><br><br>
 
            <input type="submit" value="Insertar Coche">
        </form>
    </section>

    <footer>
  
        <p>&copy; 2024 Concesionario de Coches</p>
    </footer>
</body>
</html>

