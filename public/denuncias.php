<?php
require_once('./../src/evento/action/conexao.php');
$database = new Database();
$db = $database->conectar();

$sql = "SELECT * from tbl_denuncias where validacao='v' ;";

$sql_pre = $db->prepare($sql);
$sql_pre -> execute();
$events = $sql_pre->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet">
    <link href="css/componentes.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Denuncias</title>
</head>
    <body>
        <!-- Navbar -->
        <div class="navbar">
        <div class="box1">
        <a href="./index.php"><h1>SMART LOOK</h1></a>
            <div class="navigacion">
                <a   href="./index.php">Home</a>
                <a style="color:#00ccff;" href="#">Denuncias</a>
                <a href="./Cj.php">Conheça o projeto</a>
            </div> 
        </div>
            <div class="box1">
                <div>
                   
                </div>
                <div class="a_do_login">

                <a href="./../src/views/login/login.php">Login/Cadastrar</a>
                </div> 
            </div>
        </div>        <!-- Fim do navbar -->
    <div class="main">
        <div class="page">
        <?php 
        $i = 0;
        foreach($events as $eventss){
            
            echo('
                <div class="min_box">
                    <div class="box_img">
                        <img  src="./../src/views/img_denu/'.$events[$i][5].' " alt="Logo">
                    </div>

                    <div class="for">
                        <h1 style="color:black; ">Lixo tipo:</h1>
                        <h1> '.$events[$i][2].' </h1>
                        <p>'.$events[$i][1].'</p>
                        <p>'.$events[$i][3].'</p>
                        <p>'.$events[$i][6].'</p>
                         <p>'.$events[$i][4].'</p>
                    </div>
                </div>'
            );
            $i ++;
            }
            if($i<=0){
                echo('<h1  style= color:#00aeff;  font-size:40px;>
                Ainda não há denúncias ainda :)</h1>
                '
            );
            }
            ?>

        </div>

    </div>
   <!-- começo do footer -->
        <div class="footer">
            
            <div>
            
            </div>
        
        </div>
    </body>
</html>