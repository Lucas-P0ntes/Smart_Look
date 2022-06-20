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

                <a style="color:#00ccff;" href="./login.php">Login/Cadastrar</a>
                </div> 
            </div>
        </div>
        </div>

        <!-- Fim do navbar -->

        <div>
        <div class="box">
            <div class="img">
            <img src="./../../../img/smartlook.png" alt="">
            </div>
            <form action="./../../evento/action/cadastro.php" method="post" class="form">

            <div class="input_d">
                <label for="email">Nome:</label>
                <input class="form-control" type="text" name="nome"  minlength="5" maxlength="31"  >
            </div>

            <div class="input_d">
                <label for="email">E-mail :</label>
                <input class="form-control" type="email" name="email"   minlength="5" maxlength="31"  >
            </div>
            <div class="input_d">
                <label for="number">Telefone :</label>
                <input type="number" class="form-control"  name="tel"   minlength="5" maxlength="30">
            </div> 

            <div class="input_d">
                <label for="senha">Senha :</label>
                <input type="password" class="form-control"  name="senha1"   minlength="5" maxlength="30">
            </div> 

            <div class="input_d">
                <label for="senha">Senha :</label>
                <input type="password" class="form-control"  name="senha2"   minlength="5" maxlength="30">
            </div>  
            <div class="input_d">
                <label for="senha">CPF :</label>
                <input type="number" class="form-control"  name="cpf"   >
            </div> 

                <div class="input_d">
                    <button class="bnt">Cadastrar</button> 
                </div>
               
        </form>  
        <a href="login.php">Fazer Login</a>
       
        </div>
   </div>

    </body>
</html>