<?php
session_start();
if(!$_SESSION['nome']){
    header("location: ./login/sair.php");
}
require_once('./../evento/action/conexao.php');
$database = new Database();
$db = $database->conectar();

$sql = "SELECT * from denuncias where  validacao='v' ;";

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

    <link href="./css/my_dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="./../componentes/componentes.css" rel="stylesheet">

    <title>Smart Look</title>
</head>
    <body>
        <?php include_once("./../componentes/navbar.php")?>
        <div class="main" >

            <?php include_once("./../componentes/sub_navbar.php")?>
            
            <div class="wellcome">
                <div class="wellcome_box"> 
                    <h3>Help to  Futuro</h3>   
                    <h1 style="color:#00aeff;">Help with  Smart Look</h1>          
                    <p>Para ajudar o projeto faça uma denúncia em nosso site e simples e fácil de fazer:</p>
                    <a href="./make_denounce.php" type="button"  class="button_branco"> Denunciar</a>
                </div> 
            </div>
            <div class="sub_page">
                <div class="sub_page_box">
                    <canvas id="myChart" width="20" height="6"> </canvas>
                </div>
                <div class="sub_page_box_2">
                    <h2>Algumas denuncias dos sites</h2>
                    <div class="sub_page_box_2_2">
                    <?php 
                            $i = 0;
                            
                            foreach($events as $eventss){
                                if($i<3){
                                echo('
                            <div class="min_box">
                            <div class="box_img">
                            <img  src="./img_denu/'.$events[$i][5].' " alt="Logo">
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
                        }
                        $i ++;
                        }
                        if($i<=0){
                            echo('<p  style=color:black;>
                                Ainda não há  denúncias ainda;</p>'
                            );
                        }
                    ?>
                    </div>

                </div>

            </div>
        
        </div>
                    
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="./graficos.js"></script>
    </body>
</html>