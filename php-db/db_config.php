<?php

$servername = "localhost"; 
$username = "diego"; 
$password = "diego"; 
$database = "mysql"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}