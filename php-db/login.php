<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    include 'db_config.php';

    
    $email = $_POST["email_login"];
    $password = $_POST["password_login"];

  
    $sql = "SELECT id, email, password_hash FROM usuario WHERE email = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) {
        
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password_hash"])) {
            
            header("Location: index.php");
            exit();
        } else {
            
            echo "Contraseña incorrecta";
        }
    } else {
      
        echo "Usuario no encontrado";
    }

  
    $stmt->close();
    $conn->close();
}