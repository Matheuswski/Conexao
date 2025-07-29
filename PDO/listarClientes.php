<?php
require 'conexao.php';

$conexao = conectarBanco();
$stmt = $conexao->prepare("SELECT* FROM cliente");
$stmt->execute();
$clietes = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Clietes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2> Lista de Clientes</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>E-mail</th>
        </tr>
        <?php foreach ($clietes as $cliente): ?>
        <tr>
            <td><? echo htmlspecialchars($cliente['id_cliente']) ?></td>
            <td><? echo htmlspecialchars($cliente['nome']) ?></td>
            <td><? echo htmlspecialchars($cliente['endereco']) ?></td>
            <td><? echo htmlspecialchars($cliente['telefone']) ?></td>
            <td><? echo htmlspecialchars($cliente['email']); ?></td>
        </tr>
            <?php endforeach; ?>
    </table>    
</body>
</html>