<?php
session_start();
if(!$_SESSION['nome']){
    header("location: ./login/sair.php");
}
require_once('./../evento/action/conexao.php');
$database = new Database();
$db = $database->conectar();
$cpf=$_SESSION['cpf'];
$sql1 = "SELECT * from denuncias where validacao='v'AND cpf='".$cpf."' ;";

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
    <link href="./css/my_denounce.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="./../componentes/componentes.css" rel="stylesheet">
    <title>Smart Look</title>
</head>
    <body>
        <!-- Navbar -->
        <?php include_once("./../componentes/navbar.php")?>
        <!-- Fim do navbar -->

        <div class="main">
            <?php include_once("./../componentes/sub_navbar.php")?>

            <div class="page">
                <h1>Minhas denúncias </h1>
                <div class="container_min_box">
        
            <?php 
                $i = 0;
                    foreach($events1 as $eventss1){
                        
                        echo('
                        <form action="./../evento/action/cancelardenuncia.php"  method="post" ">
                        <input type="hidden"  name="id" value="'.$events1[$i][0].'">
                            <div class="min_box">

                                <div class="box_img">
                                    <img  src="./img_denu/'.$events1[$i][5].' " alt="Logo">
                                </div>

                                <div class="for">
                                   

                                    <div class="container_elements"> 
                                        <label for="">Tipo:</label>
                                        <p>'.$events1[$i][2].'</p>
                                    </div>
                                   

                                    <div class="container_elements"> 
                                        <label for="">Região:</label>
                                        <p>'.$events1[$i][1].'</p>
                                    </div>

                                    <div class="container_elements"> 
                                        <label for="">CEP da rua:</label>
                                        <p>'.$events1[$i][3].'</p>
                                    </div>

                                    <div class="container_elements"> 
                                        <label for="">Data:</label>
                                        <p>'.$events1[$i][6].'</p>
                                    </div>
                                    <div class="container_elements"> 
                                        <label for="">Comentarios:</label>
                                        <p>'.$events1[$i][4].'</p>
                                    </div>


                                </div>
                                <div class="box_bnt">
                                    <button class="bnt_red">Cancelar</button>
                                    <button class="bnt_green" formaction="./../evento/action/solucionado.php" >solucionado</button>
                                </div>
                            </div>
                        </form>'

                        );
                        $i ++;
                        }

                        if($i<=0){
                            echo('<p  style=color:black;>
                                Você não tem denúncias ainda;</p>'
                            );
                        }
                        
                ?>
                </div>
                </div>
            </div>
 
    </body>
</html>