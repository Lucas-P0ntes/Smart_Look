<?php
session_start();
if(!$_SESSION['nome']){
    header("location: ./login/sair.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/denuncia.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
    <body>
        <!-- Navbar -->
            <div class="navbar">
        <div class="box1">
            <img class="imglogo" src="./../../img/Smartlook.png" alt="Logo">
           
        </div>
        <div>
               
        <a href="./dashboard.php">Dashboard</a>
        </div>
        <div>
                    <form action="./../evento/action/buscar.php" method="post" class="bar" >
                        <label for="">Buscar:
                        <input type="search" class="search_bar" name="buscar" placeholder="Região:" required></label>
                        <button class="search-btn" type="submit">
                            <span class="material-symbols-outlined" >search</span>
                        </button>
                    </form>
        </div>
            <div>
               
                <a href="./login/sair.php">Sair</a>
            </div>
        </div>

        <!-- Fim do navbar -->
    <div class="main">
        <div class="page">
            <div class="box_denuncia">
                <div class="mid_box_left" style="margin:20px">
                 <form action="./../evento/action/denuncia.php" method="post" class="form" enctype="multipart/form-data">

                   
                    
                 <div class="div_input">
                        <label for="local">Local:</label>
                        <input class="form-control" type="text" name="local" id="local"  min="5" max="31"  >
                    </div>

                    <div class="div_input">
                        <label >Tipo do lixo </label>
            
                            <select class="form-select" aria-label="Default select example" name="tipo" id="">
                            <option disabled >Escolhar o tipo do lixo:</option>
                            <option value="Lixo orgânico">Lixo orgânico</option>
                            <option value="Lixo reciclável">Lixo reciclável</option>
                            <option value="Lixo industrial">Lixo industrial</option>
                            <option value="Lixo hospitalar">Lixo hospitalar</option>
                            <option value="Lixo comercial">Lixo comercial</option>
                            <option value="Lixo verde">Lixo verde</option>
                            <option value="Lixo eletrônico">Lixo eletrônico</option>
                            </select>
                    </div>

                    <div class="div_input">
                        <label for="endereco">Endereço:</label>
                        <input type="text" class="form-control"  name="endereco" id="endereco"  minlength="5" maxlength="60">
                    </div> 

                    <div class="div_input">
                        <label for="text">Complemento:</label>
                        <input type="text" class="form-control"  name="complemento" id="complemento"  minlength="5" maxlength="30">
                    </div>  

                    <div class="div_input" style='margin:10px'>
                        <label >Foto</label>
                        <input class="form-control" type="file" name="file" id="file">
                    </div>

                        <div class="div_input">
                            <button class="form-control" >Denunciar</button> 
                        </div>
                    </form>  
                </div>
                <div class="mid_box_right">
                    <div>
                    <h1>A mudança começa por você</h1>
                    <p>
                        Preste atenção nas informações preencidas nos campos.

                    </p>
                 </div>
          
        </div>
    </div>
 
   <!-- começo do footer
        <div class="footer">
            
            <div>
            <a href="">Pacerias</a>
            <a href=""></a>
            </div>
        
        </div>
    </body>
</html> -->