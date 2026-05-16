<?php
session_start();
include 'conecta.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $funcao = $_POST['funcao'];
    try {
        $sqlCheck = "SELECT COUNT(*) FROM usuarios WHERE cpf = :cpf";
        $stmtCheck = $pdo->prepare($sqlCheck);
        $stmtCheck->bindParam(':cpf', $cpf);
        $stmtCheck->execute();
        if ($stmtCheck->fetchColumn() > 0) {
            echo "<script>
                    alert('Pessoa / Usuário já existe em nosso banco de dados!');
                    history.back();
                  </script>";
        }
        else {
            $sqlInsert = "INSERT INTO pessoas (nome, cpf, funcao, genero, login, senha)
                          VALUES (:nome, :cpf, :funccao, :genero, :login, :senha)";
        
            $stmtInsert = $pdo->prepare($sqlInsert);
            $stmtInsert->bindParam(':nome', $nome);
            $stmtInsert->bindParam(':cpf', $cpf);
            $stmtInsert->bindParam(':funcao', $funcao);
            $stmtInsert->bindParam(':genero', $genero);
            $stmtInsert->bindParam(':login', $login);
            $stmtInsert->bindParam(':senha', $senha);
            if ($stmtInsert->execute()) {
               if ($funcao == "admin") {
                echo "<script>
                           alert('Pessoa / Usuário cadastrada com sucesso!');
                           window.location.href ='usuarios.php';
                         </script>";
               } else {

                   echo "<script>
                           alert('Pessoa / Usuário cadastrada com sucesso!');
                           window.location.href ='usuarios.php';
                         </script>";
                   exit();
               }
            } else {
                echo "<script>
                        alert('Erro ao cadastrar pessoa!');
                        history.back();
                      </script>";
            }
        }
    } catch (PDOExcepetion $e) {
       echo "Erro:".$e->getMessage();
    }
}
?>