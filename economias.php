<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: index.php');
    exit();
}
include('db.php');

$email = $_SESSION['email'];
$sql = "SELECT * FROM economia WHERE usuario_email='$email'";
$result = $conn->query($sql);
$economias = [];
while ($row = $result->fetch_assoc()) {
    $economias[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Economias</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container">
        <h1>Economias</h1>
        <canvas id="economiasChart"></canvas>
        <table>
            <thead>
                <tr>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($economias as $economia): ?>
                <tr>
                    <td><?php echo $economia['descricao']; ?></td>
                    <td><?php echo $economia['valor']; ?></td>
                    <td><?php echo $economia['data']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="add_economia.php" class="add-button">Adicionar Economia</a>
    </div>
    <script>
        const ctx = document.getElementById('economiasChart').getContext('2d');
        const economiasChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [<?php foreach ($economias as $economia) { echo "'" . $economia['data'] . "',"; } ?>],
                datasets: [{
                    label: 'Economias',
                    data: [<?php foreach ($economias as $economia) { echo $economia['valor'] . ","; } ?>],
                    borderColor: 'rgba(54, 162, 235, 1)',
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