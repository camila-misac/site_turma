<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão Hardware</title>

</head>
  <body>
    <?php
        session_start()
    ?>
     <h1>Forum dos Programadores - Bem-vindo <?php echo $_SESSION['nick'];?></h1>
     
     <a href="adicionar_e.php" target="_self">Adicionar Equipamento</a>
     <a href="listar_e.php" target="_self">Listar Equipamento</a>
     <a href="adicionar_pc.php" target="_self">Adicionar Computador</a>
     <a href="listar_pc.php" target="_self">Listar Computador</a>
     <a href="gerir_u.php" target="_self">Gerir Utilizador</a>
     <a href="listar_l.php" target="_self">Listar Logs</a>
     <a href="gerir_bd.php" target="_self">Gerir Banco de Dados</a>
     <a href="logout.php" target="_self">Logout</a>
   
  </body>
</html>