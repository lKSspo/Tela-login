<?php
session_start();
require_once '../models/User.php';

class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->userModel->findByEmail($email);

            // Verifica se o usuário existe e se a senha está correta
            if ($user && $password === $user['password']) {
                // Inicia a sessão e define a variável de sessão
                $_SESSION['user'] = $user['name'];
                echo "Sessão iniciada com sucesso. Usuário: " . $_SESSION['user'] . "<br>";
                
                // Redireciona para home.php
                header("Location: ../views/home.php");
                exit();
            } else {
                // Exibe uma mensagem de erro e redireciona para a página de login
                echo "<script>alert('Credenciais inválidas'); window.location.href = '../views/login.php';</script>";
                exit();
            }
        }
    }

    public function logout() {
        // Limpa a sessão e redireciona para a página de login
        session_unset();
        session_destroy();
        header("Location: ../views/login.php");
        exit();
    }
}

$authController = new AuthController();

// Verifica a ação de login ou logout
if (isset($_POST['submit']) && $_POST['submit'] === 'login') {
    $authController->login();
} elseif (isset($_GET['action']) && $_GET['action'] === 'logout') {
    $authController->logout();
}
?>
