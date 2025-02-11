<!DOCTYPE html>
<html lang="pt">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <link href="styles.css" rel="stylesheet">

      <title>Gestão Hardware</title>
  </head>
  <body>
    <?php
        session_start()
    ?>
     <h1> Gestão Hardware - Bem-vindo <?php echo $_SESSION['nome'];?></h1>
     
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
