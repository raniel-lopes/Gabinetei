<?php
session_start();
if (isset($_SESSION['usuario_logado'])) {
    header('Location: /pages/dashboard.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gerenciamento de Gabinetes</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

    <header>
        <h1>Sistema de Gerenciamento de Gabinetes</h1>
        <a href="/auth/login.php" class="btn-login">Já sou cliente</a>
    </header>

    <section class="hero-section">
        <div>
            <h2>Bem-vindo ao Sistema de Gerenciamento de Gabinetes</h2>
            <p>Gerencie seus eleitores, consulte dados e muito mais!</p>
        </div>
    </section>

    <section class="cta">
        <h3>Entre agora e comece a gerenciar seu gabinete!</h3>
        <a href="/auth/login.php">Acessar Painel</a>
    </section>

</body>
</html>
