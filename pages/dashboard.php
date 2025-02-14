
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="sidebar">
        <h2>GOVERNA+</h2>
        <ul>
            <li class="active"><a href="dashboard.php">Dashboard</a></li>
            <li><a href="cadastro.php">Novo Eleitor</a></li>
            <li><a href="aniversariantes.php">Aniversariantes</a></li>
            <li><a href="oficios.php">Ofícios</a></li>
            <li><a href="projetos.php">Projetos</a></li>
            <li><a href="closed.php">Closed</a></li>
            <li><a href="drafts.php">Drafts</a></li>
            <li><a href="snoozed.php">Snoozed</a></li>
            <li><a href="auth/logout.php">Sair</a></li>
        </ul>
    </div>
    <div class="main-content">
        <h1>Vereador Anderson Ninho</h1>
        <div class="cards">
            <div class="card">Eleitores <span><?php echo $eleitores; ?></span></div>
            <div class="card">Ofícios <span><?php echo $oficios; ?></span></div>
            <div class="card">Aniversariantes do dia <span><?php echo $aniversariantes; ?></span></div>
            <div class="card">Projetos apresentados <span><?php echo $projetos; ?></span></div>
        </div>
        <div class="charts">
            <canvas id="idadeChart"></canvas>
            <canvas id="generoChart"></canvas>
        </div>
    </div>

    <script src="js/validar_cadastro.js"></script>
</body>
</html>
