<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: index.php');
    exit();
}
include('db.php');

$email = $_SESSION['email'];
$sql = "SELECT * FROM transacao WHERE tipo='gasto' AND idConta IN (SELECT id FROM conta WHERE emailUsuario='$email')";
$result = $conn->query($sql);
$gastos = [];
while ($row = $result->fetch_assoc()) {
    $gastos[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastos</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container">
        <h1>Gastos</h1>
        <canvas id="gastosChart"></canvas>
        <table>
            <thead>
                <tr>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Data</th>
                    <th>Categoria</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($gastos as $gasto): ?>
                <tr>
                    <td><?php echo $gasto['descricao']; ?></td>
                    <td><?php echo $gasto['valor']; ?></td>
                    <td><?php echo $gasto['data']; ?></td>
                    <td><?php echo $gasto['idCategoria']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="add_gasto.php" class="add-button">Adicionar Gasto</a>
    </div>
    <script>
        const ctx = document.getElementById('gastosChart').getContext('2d');
        const gastosChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [<?php foreach ($gastos as $gasto) { echo "'" . $gasto['data'] . "',"; } ?>],
                datasets: [{
                    label: 'Gastos',
                    data: [<?php foreach ($gastos as $gasto) { echo $gasto['valor'] . ","; } ?>],
                    borderColor: 'rgba(255, 99, 132, 1)',
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