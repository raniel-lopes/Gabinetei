<?php
$servername = "localhost";
$username = "root";
$password = "";  // Senha vazia por padrão no XAMPP
$database = "gabinetei";  // Nome do banco de dados

// Criação da conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
