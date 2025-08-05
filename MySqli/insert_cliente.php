<?php
require_once "conexao.php";

$conexao = conectadb();

$nome = "Matheus Golanowski";
$endereco = "Rua Davina do Nacimento Goes, 21";
$telefone = "(41) 3002-8922";
$email = "Matheusgolanowski1@gmail.com";

//Preparando a consulta SQL para inserir os dados do cliente para evitar SQL Injection
$stmt = $conexao->prepare("INSERT INTO cliente (nome, endereco, telefone, email) VALUES (?, ?, ?, ?)");
//Associando os parâmetros à consulta preparada
$stmt -> bind_param("ssss", $nome, $endereco, $telefone, $email);

if ($stmt -> execute()) {
    echo"Cliente inserido com sucesso!";
} else {
    echo"Erro ao inserir cliente: " . $stmt->error;
}

$stmt->close();
$conexao->close();
?>