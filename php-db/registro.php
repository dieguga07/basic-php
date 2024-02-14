<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    include 'db_config.php';


    $email = $_POST["email_registro"];
    $password = $_POST["password_registro"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $edad = $_POST["edad"];
    $direccion = $_POST["direccion"];

 
    $sql = "SELECT id FROM usuario WHERE email = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 0) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $sql_insert = "INSERT INTO usuario (email, password_hash, nombre, apellidos, edad, direccion) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param("ssssis", $email, $password_hash, $nombre, $apellidos, $edad, $direccion);
        if ($stmt_insert->execute()) {
           
            header("Location: index.php");
            exit();
        } else {
         
            echo "Error al registrar el usuario";
        }
        $stmt_insert->close();
    } else {
      
        echo "El email ya está registrado";
    }


    $stmt->close();
    $conn->close();
}