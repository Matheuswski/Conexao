<?php
require_once "conexao.php";

$conexao = conectabd();

$nome = "Matheuswski";
$endereco = "Jariva";
$telefone = "4140028922";
$email = "teteus17@teste.com";

$id_cliente = 1;

$stmt = $conexao->prepare("UPDATE cliente SET nome = ?, endereco = ?, telefone = ?, email = ? WHERE id_cliente = ?");
$stmt->bind_param("ssssi", $nome, $endereco, $telefone, $email, $id_cliente);
if ($stmt->execute()) {
    echo "Cliente atualizado com sucesso!";
} else {
    echo "Erro ao atualizar cliente: " . $stmt->error;
}
$stmt->close();
$conexao->close();
?>