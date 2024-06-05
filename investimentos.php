<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: index.php');
    exit();
}
include('db.php');

$email = $_SESSION['email'];
$sql = "SELECT * FROM investimento WHERE usuario_email='$email'";
$result = $conn->query($sql);
$investimentos = [];
while ($row = $result->fetch_assoc()) {
    $investimentos[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investimentos</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container">
        <h1>Investimentos</h1>
        <canvas id="investimentosChart"></canvas>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Valor Atual</th>
                    <th>Retorno</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($investimentos as $investimento): ?>
                <tr>
                    <td><?php echo $investimento['nome']; ?></td>
                    <td><?php echo $investimento['valor_atual']; ?></td>
                    <td><?php echo $investimento['retorno']; ?></td>
                    <td><?php echo $investimento['data']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="add_investimento.php" class="add-button">Adicionar Investimento</a>
    </div>
    <script>
        const ctx = document.getElementById('investimentosChart').getContext('2d');
        const investimentosChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [<?php foreach ($investimentos as $investimento) { echo "'" . $investimento['data'] . "',"; } ?>],
                datasets: [{
                    label: 'Investimentos',
                    data: [<?php foreach ($investimentos as $investimento) { echo $investimento['valor_atual'] . ","; } ?>],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>