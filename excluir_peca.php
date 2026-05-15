<?php
   include'conecta.php';
   if(isset($_GET['codigo']) && !empty($_GET['codigo'])){
     $codigo= filter_input(INPUT_GET, 'codigo', FILTER_SANITIZE_NUMBER_INT);
     try {
        $sql ="DELETE FROM pecas WHERE codigo = :codigo";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':codigo', $codigo, PDO::PARAM_INT);
        if($stmt->execute()){
            header("Location: pecas.php?msg=Sucesso");
            exit;
        
        }
        else{
            header("Location: excluir_peca.php?msg=Não conseghui apagar");
        }
     } catch (PDOExcepetion $e) {
        die("Erro:".$e->getMessage());
     }
   }
   else{
    header("Location: excluir_pecas.php");
            exit;
   }
?>