<?php

// session_start();
// if($_SESSION['nome']){
//     header("location:./../dashboard.php ");
// }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./../css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>
</head>
    <body class="main1">
        <!-- Navbar -->
           <div class="navbar">
        <div class="box1">
            <img class="imglogo" src="./../../../img/Smartlook.png" alt="Logo">
            <div>
                <a href="./../../../public/index.php">Home</a>
                <a  href="./../../../public/denuncias.php">Denuncias</a>
                <a  href="./../../../public/">Conheça o projeto</a>
            </div> 
        </div>
            <div class="box1">
                <div>
                 
                </div>
                <div class="">

                <a style="color:#00ccff;" href="#">Login/Cadastrar</a>
                </div> 
</div>
        </div>

        <!-- Fim do navbar -->

        <div >
            <div class="box">
                 <div class="img">
                     <img src="./../../../img/smartlook.png" alt="">
                 </div>
                <form action="./../../evento/action/login.php" method="post" class="form">

                    <div class="input_email">
                        <label for="email">E-mail :</label>
                        <input class="form-control" type="email" name="email" id="email"  min="5" max="31"  >
                    </div>

                    <div class="input_senha">
                        <label for="senha">Senha :</label>
                        <input type="password" class="form-control"  name="senha" id="senha"  minlength="5" maxlength="30">
                    </div>  

                    <div class="bnt">
                        <button class="bnt">Entrar</button> 
                    </div>
               
                </form>  
                
                <a href="cadastrar.php">Fazer Cadastro</a>
            </div>
        </div>

    </body>
</html>