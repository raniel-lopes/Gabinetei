<?php
session_start();

// Se o usuário já estiver logado, redireciona para o dashboard
if (isset($_SESSION['usuario'])) {
    header("Location: /pages/dashboard.php");
    exit();
}

// Verifica se há erro na URL
$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>

    <header>
        <h1>Login</h1>
    </header>

    <main>
        <form action="/auth/login.php" method="POST">
            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario" required><br><br>
            
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required><br><br>
            
            <?php if ($erro): ?>
                <p style="color: red;">Usuário ou senha inválidos. Tente novamente.</p>
            <?php endif; ?>
            
            <button type="submit">Entrar</button>
        </form>
    </main>

</body>
</html>
