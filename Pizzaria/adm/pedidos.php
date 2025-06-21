<?php
require '../php/protect.php';
include '../php/conexao.php';

$sql = "SELECT * FROM pedidos ORDER BY id DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();
$pedidos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Pedidos - ADM</title>
  <link rel="stylesheet" href="../css/style.css" />
</head>
<body>

  <nav>
    <a href="painel.php">Painel ADM</a>
    <a href="pedidos.php">Pedidos</a>
    <a href="contatos.php">Contatos</a>
    <a href="logout.php">Sair</a>
  </nav>

  <main>
    <h1>Pedidos Recebidos 🍕</h1>

    <?php if (count($pedidos) > 0): ?>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Pizza</th>
            <th>Quantidade</th>
            <th>Data/Hora</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($pedidos as $row): ?>
            <tr>
              <td><?= htmlspecialchars($row['id']) ?></td>
              <td><?= htmlspecialchars($row['pizza']) ?></td>
              <td><?= htmlspecialchars($row['quantidade']) ?></td>
              <td><?= htmlspecialchars($row['data_pedido']) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else: ?>
      <p>Nenhum pedido encontrado.</p>
    <?php endif; ?>

  </main>

  <footer>
    <p>&copy; 2025 Pizzaria Yamanari. Todos os direitos reservados.</p>
  </footer>

</body>
</html>
