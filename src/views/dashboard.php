<?php
session_start();
if(!$_SESSION['nome']){
    header("location: ./login/sair.php");
}
require_once('./../evento/action/conexao.php');
$database = new Database();
$db = $database->conectar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="./css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="./../componentes/navbar.css" rel="stylesheet">

    <title>Smart Look</title>
</head>
    <body>
        
        <div class="main">
        <?php include_once("./../componentes/navbar.php")?>
        <div class="page">
            <div class="box">
            <h1>Bem vindo: <?php echo($_SESSION['nome']) ?></h1>
                <div class="box_a">
                    <div class="med" style="color:#00ccff;">
                        <h2>Fazer uma denunciar</h2>
                        
                        <a href="./denuncia.php" type="button" class="btn btn-info">Denunciar</a>
                    </div>
                    <div class="med" style="color:rgb(255, 182, 46)">
                    <h2>
                            Minhas denuncias
                        </h2>
                        <a href="./minhasdenuncias.php" type="button" class="btn btn-warning">Ver</a>

                    </div>
                    
                    <div class="min"style="color:red">
                    <h3>
                            Canceladas
                        </h3>
                        <a href="./cancelada.php" type="button" class="btn btn-danger">Canceladas</a>
                    </div>
                    <div class="min" style="color:#00ad1d">
                    <h3>
                           Solucionado
                        </h3>
                        <a href="./sucesso.php"type="button" class="btn btn-success">Sucesso</a>
                    </div>

                </div>
         
                <div class="box_b">
                    <div class="grad">
                    <canvas id="myChart" width="20" height="6"> </canvas>

                    </div>
                    <div class="med">
                    <h1>Ver denuncias</h1>
                    <a href="./home.php" type="button" class="btn btn-primary">Ver denuncias</a>
                    </div>
                </div> 

            </div>
         
     
        </div>
    </div>
 
   <!-- começo do footer -->
        <div class="footer">
            
            <div>
            <a href=""></a>
            <a href=""></a>
            </div>
        
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="./graficos.js"></script>
    </body>
</html>