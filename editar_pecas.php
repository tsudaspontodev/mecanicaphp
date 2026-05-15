<?php
    include 'conecta.php';
    $codigo = $_POST['codigo']; 
    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $descricao = $_POST['descricao'];
    $data_entrada = $_POST['data_entrada'];
    $sql = "UPDATE pecas SET nome = :nome, marca = :marca, modelo = :modelo, descricao = :descricao, data_entrada = :data_entrada WHERE codigo = :codigo";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':codigo', $codigo, PDO::PARAM_INT);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':marca', $marca, PDO::PARAM_STR);
    $stmt->bindParam(':modelo', $modelo, PDO::PARAM_STR);
    $stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
    $stmt->bindParam(':data_entrada', $data_entrada, PDO::PARAM_STR);
    $stmt->execute();
    header("Location: mecanica.php"); 
    exit;
?>