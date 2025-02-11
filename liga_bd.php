<?php
$servidor="sql301.infinityfree.com";
$utilizador="if0_38170531";
$senha = "qicf0wHVkq";
$bd="db_hardware";
$ligacao = mysqli_connect($servidor,$utilizador,$senha,$bd);
if ($ligacao->connect_error)
    die(mysqli_error($ligacao));
?>