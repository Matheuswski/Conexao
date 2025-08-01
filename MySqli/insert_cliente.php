<?php
require_once "conexao.php";

$conexao = conectabd();

$nome = "Matheus Golanowski";
$endereco = "Jarivatuba";
$telefone = "40028922";
$email = "teteus16@teste.com";

$stmt = $conexao->prepare("INSERT INTO cliente (nome, endereco, telefone, email) VALUES (?, ?, ?, ?)");

$stmt->bind_param("ssss", $nome, $endereco, $telefone, $email);

if ($stmt->execute()) {
    echo"Cliente adicionado com susseso!";
} else {
    echo "Erro ao adicionar cliente: " . $stmt->error;
}

$stmt->close();
$conexao->close();
?>