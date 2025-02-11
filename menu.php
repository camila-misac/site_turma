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
    <h1>Menu</h1>
    <?php
        include 'liga_bd.php';
        $sql = "SELECT * FROM t_user where nome ='".$_POST["nome"]."'";

        $resultado = mysqli_query($ligacao, $sql) or die(mysqli_error(mysql:$ligacao));
        $linha=mysqli_fetch_assoc($resultado);
        if ($linha == NULL)
        {
          header('Location: erro.html');
        }
 
        if(strcmp($_POST['password'],$linha['password']) ==0)
        {
          if ($linha['apagado'] == 1) 
          {
            header(header: 'Location: erro_lock.html');
          }        
          else
          {
            session_start();
            $_SESSION['id'] = $linha['id'];
            $_SESSION['nome'] = $linha['nome'];
            header(header: 'Location: menu2.php');
          }
        }
        else 
        {
         header(header:'Location: erro.html');
        }
        mysqli_close(mysql:$ligacao);        

    ?>
    <a href="index.html" target ="_self">Voltar ao inicio</a>
</body>
</html>
