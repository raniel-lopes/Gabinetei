<?php
session_start();

// Simulação de credenciais (substituir por consulta ao banco de dados)
$usuarios = [
    "admin" => "123456",
    "gabinete" => "senha123"
];

$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

if (isset($usuarios[$usuario]) && $usuarios[$usuario] === $senha) {
    $_SESSION['usuario'] = $usuario;
    header("Location: pages/dashboard.php");
    exit();
} else {
    echo "Usuário ou senha inválidos!";
}
?>
