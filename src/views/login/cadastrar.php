<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./../css/cadastrar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>
</head>
    <body class="main">
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
        <div>
        <div class="box">

            <div class="img">
                <img src="./../../../img/img_profile_cadastro.png" alt="">
            </div>

                <form action="./../../evento/action/cadastro.php" method="post" class="form">

                <div class="campos_input">
                    <label for="nome">Nome:</label>
                        <input class="input" type="text" name="nome" placeholder="Primeiro nome:"  minlength="5" maxlength="31"  >
                </div>
                <?php if((isset($_SESSION['erro_nome']))){echo('<p class="erro"> "'.$_SESSION['erro_nome'].'"</p>');unset($_SESSION['erro_nome']);}?>
                <div class=campos_input>
                    <label for="email">E-mail:</label>
                    <input class="input" type="email" name="email" placeholder="E-mail completo:"  minlength="5" maxlength="31"  >
                </div>
                <?php if((isset($_SESSION['erro_email']))){echo('<p class="erro"> "'.$_SESSION['erro_email'].'"</p>');unset($_SESSION['erro_email']);}?>
                <div class=campos_input>
                    <label for="number">Telefone:</label>
                    <input type="number" class="input"  name="tel" placeholder="Telefone pessoal:"  minlength="5" maxlength="30">
                </div> 
                <?php if((isset($_SESSION['erro_tel']))){echo('<p class="erro"> "'.$_SESSION['erro_tel'].'"</p>');unset($_SESSION['erro_tel']);}?>
                <div class=campos_input>
                    <label for="senha">Crie a senha:</label>
                    <input type="password" class="input"  name="senha1" placeholder="Senha:"   minlength="5" maxlength="30">
                </div> 

                <div class=campos_input>
                    <label for="senha">Confirmer a senha:</label>
                    <input type="password" class="input"  name="senha2"  placeholder="Repita a senha:"  minlength="5" maxlength="30">
                </div>  
                <?php if((isset($_SESSION['erro_pass']))){echo('<p class="erro"> "'.$_SESSION['erro_pass'].'"</p>');unset($_SESSION['erro_pass']);}?>
                <div class=campos_input>
                    <label for="senha">CPF:</label>
                    <input type="number" class="input" placeholder="Coloque os 11 digitos:" name="cpf"   >
                </div> 
                <?php if((isset($_SESSION['erro_cpf']))){echo('<p class="erro"> "'.$_SESSION['erro_cpf'].'"</p>'); unset($_SESSION['erro_cpf']);}?>

                    <div class="">
                        <button class="bnt">Cadastrar</button> 
                    </div>
                
            </form>  

            <a style="margin:5px" href="login.php">Fazer Login</a>

            </div>
        </div>
    </body>
</html>