<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Clientes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
      
        <h1>Concesionario de Coches</h1>
    </header>

    <nav>
    
        <ul>
            <li><a href="index.php">Principal</a></li>
            <li><a href="insertar_coche.php">Insertar Coche</a></li>
            <li><a href="listado_clientes.php">Listado de Clientes</a></li>
        </ul>
    </nav>

    <section>
        
        <h2>Listado de Clientes</h2>
        <form action="listado_clientes.php" method="post">
            <label for="cliente">Seleccione un cliente:</label>
            <select name="cliente" id="cliente">
          
                <option value="1">Cliente 1</option>
                <option value="2">Cliente 2</option>
                <option value="3">Cliente 3</option>
                
            </select>
            <input type="submit" value="Mostrar Coches Encargados">
        </form>
    </section>

    <footer>
     
        <p>&copy; 2024 Concesionario de Coches</p>
    </footer>
</body>
</html>
