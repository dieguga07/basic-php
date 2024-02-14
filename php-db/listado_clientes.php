<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Coches Encargados</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
     
        <h1>Listado de Coches Encargados</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index_3.php">Volver</a></li>
        </ul>
    </nav>

    <section>
        <?php
      
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           
            include 'db_config.php';

          
            $cliente_id = $_POST["cliente"];

           
            $sql = "SELECT c.Modelo, c.Marca, e.Cantidad, e.Fecha 
                    FROM coche c 
                    INNER JOIN encargos e ON c.id = e.Coche_id 
                    WHERE e.cliente_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $cliente_id);
            $stmt->execute();
            $result = $stmt->get_result();

            
            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>Modelo</th><th>Marca</th><th>Cantidad</th><th>Fecha</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["Modelo"] . "</td>";
                    echo "<td>" . $row["Marca"] . "</td>";
                    echo "<td>" . $row["Cantidad"] . "</td>";
                    echo "<td>" . $row["Fecha"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "No se encontraron coches encargados por este cliente.";
            }

            $stmt->close();
            $conn->close();
        }
        ?>
    </section>

    <footer>
       
        <p>&copy; 2024 Concesionario de Coches</p>
    </footer>
</body>
</html>
