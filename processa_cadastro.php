<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <style>
        html {
            background-color: #e0ffe0; /* Cor de fundo verde claro */
        }
    </style>
</head>
<body>
    <?php
    require_once 'conexao.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $login = $_POST['email'];
        $senha = $_POST['senha'];

        // Verificar se o login já existe
        $sql = "SELECT ID FROM usuario WHERE email = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("s", $login);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // O login já está em uso
            echo "Login já em uso. Escolha outro.";
        } else {
            // Hash da senha antes de armazená-la no banco de dados
            $hashedSenha = password_hash($senha, PASSWORD_DEFAULT);

            // Inserir o novo usuário no banco de dados
            $sql = "INSERT INTO usuario (email, senha) VALUES (?, ?)";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("ss", $login, $hashedSenha);

            if ($stmt->execute()) {
                echo "<script>alert('Cadastro realizado com sucesso.'); window.location.href = 'login.php';</script>";
            } else {
                echo "<script>alert('Erro ao cadastrar o usuário. Tente novamente.');</script>";
            }
        }
        $stmt->close();
    }
    ?>
</body>
</html>