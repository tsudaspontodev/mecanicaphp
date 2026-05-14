<?php   
    $funcao = $_SESSION['funcao'];
    if ($funcao == "admin") {
        echo "<a href = 'mecanica.php' style = 'text-decoration: none; font-weight: bold; font: black'>HOME</a>";
        echo "<b> | </b>";
         echo "<a href = 'pecas.php' style = 'text-decoration: none; font-weight: bold; font: black'>PEÇAS</a>";
        echo "<b> | </b>";
         echo "<a href = 'servicos.php' style = 'text-decoration: none; font-weight: bold'>SERVIÇOS</a>";
        echo "<b> | </b>";
         echo "<a href = 'usuarios.php' style = 'text-decoration: none; font-weight: bold'>USUÁRIOS</a>";
        echo "<b> | </b>";
         echo "<a href = 'ordens.php' style = 'text-decoration: none; font-weight: bold'>ORDENS DE SERVIÇOS</a>";
        
    } elseif ($funcao == "Administrativo") {
        echo "<a href = 'mecanica.php' style = 'text-decoration: none; font-weight: bold'>HOME</a>";
        echo "<b> | </b>";
         echo "<a href = 'pecas.php' style = 'text-decoration: none; font-weight: bold'>PEÇAS</a>";
        echo "<b> | </b>";
         echo "<a href = 'servicos.php' style = 'text-decoration: none; font-weight: bold'>SERVIÇOS</a>";
        echo "<b> | </b>";
        //  echo "<a href = 'usuarios.php' style = 'text-decoration: none; font-weigth: bold'>USUÁRIOS<\a>";
        // echo "<b> | </b>";
         echo "<a href = 'ordens.php' style = 'text-decoration: none; font-weight: bold'>ORDENS DE SERVIÇOS</a>";
    } else {
        echo "<a href = 'mecanica.php' style = 'text-decoration: none; font-weight: bold'>HOME</a>";
        echo "<b> | </b>";
        echo "<a href = 'ordens_mec.php' style = 'text-decoration: none; font-weight: bold'>ORDENS DE SERVIÇOS</a>";
    }
?>

