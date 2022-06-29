<?php
session_start();
if(!$_SESSION['nome']){
    header("location: ./login/sair.php");
}
require_once('./../evento/action/conexao.php');
require_once('./../componentes/funcoes.php');

$database = new Database();
$db = $database->conectar();


if(isset($_SESSION["buscar"])){
$buscar=$_SESSION["buscar"];}
if(empty($buscar)){
    $sql = "SELECT * from denuncias where  validacao='v' ;";

$sql_pre = $db->prepare($sql);
$sql_pre -> execute();
$events = $sql_pre->fetchAll();}
else{
    $sql = "SELECT * from denuncias where local ='".$buscar."'  And validacao='v' ;";

    $sql_pre = $db->prepare($sql);
    $sql_pre -> execute();
    $events = $sql_pre->fetchAll();
    $_SESSION["buscar"] ='';
    $buscar='';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/all_denounce.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="./../componentes/componentes.css" rel="stylesheet">
    <title>Smart Look</title>
</head>
    <body>
    <?php include_once("./../componentes/navbar.php")?>
        
        <div class="main">
            <?php include_once("./../componentes/sub_navbar.php")?>
            
            <div class="page">
                <h1>Todas as Denuncias</h1>
                <div class="container_min_box">
                    <?php renderizar_box_denuncias($events)?>
                </div>
            </div>

        </div>
    </body>
</html>