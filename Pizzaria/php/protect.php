<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo "Acesso negado. Faça login primeiro.";
    header("Refresh: 2; URL=../login.html");
    exit;
}
?>
