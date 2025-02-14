<?php
function conectarBanco() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "gabinetei";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    return $conn;
}

// Para utilizar a conexão:
$conn = conectarBanco();
?>
