<?php
// Conectar ao banco de dados
include('config.php');

// Consulta para pegar os dados dos eleitores e calcular a idade
$query = "SELECT nome, YEAR(CURDATE()) - YEAR(data_nascimento) AS idade, sexo FROM eleitores";
$result = mysqli_query($conn, $query);

// Contagem de homens e mulheres para o gráfico
$query_sex = "SELECT sexo, COUNT(*) as count FROM eleitores GROUP BY sexo";
$sex_result = mysqli_query($conn, $query_sex);
$sex_data = [
    'Masculino' => 0,
    'Feminino' => 0
];

// Preenchendo a contagem de sexo
while ($row = mysqli_fetch_assoc($sex_result)) {
    $sex_data[$row['sexo']] = $row['count'];
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Eleitores</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Relatório de Eleitores</h1>
        
        <div class="chart-container">
            <canvas id="sexChart" width="400" height="400"></canvas>
        </div>
        
        <div class="report-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Sexo</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dados dos eleitores -->
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['nome']; ?></td>
                        <td><?php echo $row['idade']; ?></td>
                        <td><?php echo $row['sexo']; ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('sexChart').getContext('2d');
        var sexChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Homens', 'Mulheres'],
                datasets: [{
                    data: [<?php echo $sex_data['Masculino']; ?>, <?php echo $sex_data['Feminino']; ?>], // Dados dinâmicos
                    backgroundColor: ['#36a2eb', '#ff6384']
                }]
            }
        });
    </script>
</body>
</html>
