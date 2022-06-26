<?php

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
        <a href="./../../../public/index.php"><h1>SMART LOOK</h1></a>
            <div class="navigacion">
                <a  href="./../../../public/index.php">Home</a>
                <a href="./../../../public/denuncias.php">Denuncias</a>
                <a  href="./../../../public/cj.php">Conheça o projeto</a>
            </div> 
        </div>
            <div class="box1">
                <div>
                   
                </div>
                <div class="a_do_login">

                <a style="color:#00ccff;" href="#">Login/Cadastrar</a>
                </div> 
            </div>
        </div>
        <!-- Fim do navbar -->
        <div >
            <div class="box">

                 <div class="img">
                     <img src="./../../../img/img_profile_cadastro.PNG" alt="">
                 </div>

                <form action="./../../evento/action/login.php" method="post" class="form">
                        <h1>Login</h1>
                    <div class="input_email">
                        <label for="email">
                            <input class="input" type="email" name="email" id="email" placeholder="E-mail:" min="5" max="31"  >
                        </label>
                    </div>

                    <div class="input_senha">
                        <label for="senha">
                            <input type="password" class="input"  name="senha" id="senha" placeholder="Senha:" minlength="5" maxlength="30">
                        </label>             
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