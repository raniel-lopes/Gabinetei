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
                    <!-- Exemplo de linha -->
                    <tr>
                        <td>João Silva</td>
                        <td>35</td>
                        <td>Masculino</td>
                    </tr>
                    <tr>
                        <td>Ana Costa</td>
                        <td>28</td>
                        <td>Feminino</td>
                    </tr>
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
                    data: [50, 50], // Substitua com os dados do banco
                    backgroundColor: ['#36a2eb', '#ff6384']
                }]
            }
        });
    </script>
</body>
</html>
