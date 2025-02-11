<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Gestão Hardware</title>
</head>
<body>
    <h1>Menu</h1>
<?php

include 'liga_bd.php';

$sql = "SELECT * FROM t_user where nome ='".$_POST["nome"]."'";

$resultado = mysqli_query($ligacao, $sql) or die(mysqli_error($ligacao));

$linha = mysqli_fetch_assoc($resultado);

if($linha == NULL)
    header('Location: erro.html');

if(strcmp($_POST['password'], $linha['password'])==0){
    if ($linha['apagado']==1)
        header('Location: erro_lock.html');
    else{
    session_start();
    $_SESSION['id']=$linha['id'];
    $_SESSION['nome']=$linha['nome'];
    header('Location: menu2.php');
    }
}
else
    header('Location: erro.html');  
mysqli_close($ligacao);

?>
<br/>
<p>
<a href="index.html" target="_self">Volta ao Menu</a>
</body>
</html>
