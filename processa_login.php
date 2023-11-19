<?php
session_start(); 
include_once 'conexao.php'; // Conexão com o banco de dados
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['email'];
    $senha = $_POST['senha'];
    // Consulta ao banco de dados para verificar o login
    $sql = "SELECT * FROM usuario WHERE email = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $result = $stmt->get_result();
        if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row['senha'])) {
            // Login bem-sucedido, redirecione para a página de perfil ou dashboard
            $_SESSION['usuario'] = $row['email'];
            header("Location: perfil.php");
            exit();
        } else {
            // Senha incorreta
            echo "Senha incorreta. Tente novamente.";
        }
    } else {
        // Login não encontrado
        echo "Login não encontrado. Tente novamente.";
    }
    $stmt->close();
}?>


