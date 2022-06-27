<?php
session_start();
if(!$_SESSION['nome']){
    header("location: ./login/sair.php");
}
require_once('./../evento/action/conexao.php');
require_once("./../componentes/funcoes.php");
$database = new Database();
$db = $database->conectar();
$cpf=$_SESSION['cpf'];
$sql1 = "SELECT * from denuncias where validacao='e'AND cpf='".$cpf."' ;";

$sql_pre1 = $db->prepare($sql1);
$sql_pre1 -> execute();
$events1 = $sql_pre1->fetchAll();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/my_canceled.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="./../componentes/componentes.css" rel="stylesheet">
    <title>Document</title>
</head>
    <body>
    <?php include_once("./../componentes/navbar.php")?>

    <div class="main">
        
         <?php include_once("./../componentes/sub_navbar.php")?>
        
            <div class="page">
                <?php renderizar_box_denuncias($events1);?>
            </div>

    </div>
    
    </body>
</html>