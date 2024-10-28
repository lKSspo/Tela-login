<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../public/styles/login.css">
</head>
<body>
    <div class="main">
        <header>
            <img src="../public/images/logo.png" alt="Tech Lab Logo" class="logo">
        </header>

        <form action="../controllers/AuthController.php" method="POST">
            <h1>Login</h1>
            <div class="form-group">
                <label for="email" class="label-email">E-mail</label>
                <input type="email" name="email" class="input-email" required>
            </div>
            <div class="form-group">
                <label for="password" class="label-password">Senha</label>
                <input type="password" name="password" class="input-password" required>
            </div>
            <button type="submit" name="submit" value="login" class="button">Entrar</button>
        </form>
    </div>
</body>
</html>
