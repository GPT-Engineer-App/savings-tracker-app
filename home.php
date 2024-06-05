<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: index.php');
    exit();
}
include('db.php');

$email = $_SESSION['email'];
$sql = "SELECT nomeCompleto FROM usuario WHERE email='$email'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Bem-vindo, <?php echo $user['nomeCompleto']; ?>!</h1>
        <input type="text" placeholder="Pesquisar...">
        <div class="grid">
            <a href="gastos.php">Gastos</a>
            <a href="economias.php">Economias</a>
            <a href="investimentos.php">Investimentos</a>
        </div>
        <a href="add_gasto.php" class="add-button">Adicionar Gasto</a>
    </div>
</body>
</html>