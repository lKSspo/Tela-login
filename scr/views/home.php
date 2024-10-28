<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="../public/styles/home.css">
</head>
<body>
    <header>
        <img src="../public/images/logo.png" alt="Logo" class="logo">
        <div class="header-content">
            <p class="welcome">Bem-vindo, <?php echo $_SESSION['user']; ?>!</p>
            <div class="button-container">
                <button class="btn">Consultar Exames</button>
                <button class="btn">Inserir Prontuário</button>
                <button class="btn">ID do Plano</button>
            </div>
        </div>
        <a href="../controllers/AuthController.php?action=logout" class="logout">Sair</a>
    </header>
</body>
</html>
