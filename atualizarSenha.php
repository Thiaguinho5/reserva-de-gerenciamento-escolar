<?php
include_once("conexao.php"); //acionando a function conexão

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["email"];
    $novasenha = $_POST["senha"];
   
    // Executar a atualização no banco de dados
    $sql = "UPDATE usuario SET senha = ? WHERE email = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("si", $novasenha, $id);

    if ($stmt->execute()) {
        echo "Dados atualizados com sucesso!";
    } else {
        echo "Erro ao atualizar dados: " . $con->error;
    }

    // Feche a declaração e a conexão
    $stmt->close();
    $con->close();
}
?>