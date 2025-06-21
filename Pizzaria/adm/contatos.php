<?php
require '../php/protect.php';
include '../php/conexao.php';

$sql = "SELECT * FROM contatos ORDER BY id DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();
$contatos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Contatos - ADM</title>
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
    <h1>Mensagens de Contato 📬</h1>

    <?php if (count($contatos) > 0): ?>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Mensagem</th>
            <th>Data/Hora</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($contatos as $row): ?>
            <tr>
              <td><?= htmlspecialchars($row['id']) ?></td>
              <td><?= htmlspecialchars($row['nome']) ?></td>
              <td><?= htmlspecialchars($row['email']) ?></td>
              <td><?= htmlspecialchars($row['mensagem']) ?></td>
              <td><?= htmlspecialchars($row['data_envio']) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else: ?>
      <p>Nenhuma mensagem de contato encontrada.</p>
    <?php endif; ?>

  </main>

  <footer>
    <p>&copy; 2025 Pizzaria Yamanari. Todos os direitos reservados.</p>
  </footer>

</body>
</html>
