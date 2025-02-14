<?php
session_start();

// Simulação de credenciais (substituir por consulta ao banco de dados)
$usuarios = [
    "admin" => "123456",
    "gabinete" => "senha123"
];

$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

// Verifica se o usuário existe e a senha está correta
if (isset($usuarios[$usuario]) && $usuarios[$usuario] === $senha) {
    $_SESSION['usuario'] = $usuario;
    header("Location: /pages/dashboard.php");
    exit();
} else {
    // Redireciona de volta para a página de login com erro
    header("Location: /pages/login.php?erro=1");
    exit();
}
?>
