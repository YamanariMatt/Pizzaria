<?php
require 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pizza = trim($_POST['pizza'] ?? '');
    $quantidade = intval($_POST['quantidade'] ?? 0);

    if (empty($pizza) || $quantidade <= 0) {
        echo "Selecione uma pizza e informe uma quantidade válida.";
    } else {
        $sql = "INSERT INTO pedidos (pizza, quantidade) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$pizza, $quantidade]);
        echo "Pedido registrado com sucesso!";
    }
} else {
    echo "Acesso inválido.";
}
?>
