<?php
include 'conecta.php';

if (isset($_GET['codigo']) && !empty($_GET['codigo'])) {
    // Força a conversão para inteiro de forma segura e moderna
    $codigo = (int) $_GET['codigo'];

    try {
        $sql = "DELETE FROM pecas WHERE codigo = :codigo";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':codigo', $codigo, PDO::PARAM_INT);

        if ($stmt->execute()) {
            header("Location: pecas.php?msg=Sucesso");
            exit; // Importante para parar a execução aqui
        } else {
            header("Location: pecas.php?msg=Erro ao apagar");
            exit;
        }
    } catch (PDOException $e) { // Corrigido o erro de digitação aqui
        die("Erro: " . $e->getMessage());
    }
} else {
    header("Location: pecas.php");
    exit;
}
?>