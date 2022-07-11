<?php
session_start();
if(!$_SESSION['cpf']){
    header("location: ./login/sair.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/make_denounce.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="./../componentes/componentes.css" rel="stylesheet">
    <title>Smart Look</title>
</head>
    <body>
    <?php include_once("./../componentes/navbar.php")?>
        <!-- Fim do navbar -->
    <div class="main">
    <?php include_once("./../componentes/sub_navbar.php")?>
        <div class="page">
            <div class="box_denuncia">
                <div class="mid_box_left" >
                 <form action="./../evento/action/denuncia.php" method="post" class="form" enctype="multipart/form-data">

                   
                    
                 <div class="div_input">
                        <label for="local">Região administrativa:</label>
                        <select class="op" aria-label="Default select example" name="cidade" id="">
                            <option disabled selected >Escolhar a cidade :</option>
                                <option value="Plano Piloto">Plano Piloto</option>
                                <option value="Gama">Gama</option>
                                <option value="Taguatinga">Taguatinga</option>
                                <option value="Brazlândia">Brazlândia</option>
                                <option value="Sobradinho">Sobradinho</option>
                                <option value="Planaltina">Planaltina</option>
                                <option value="Paranoá">Paranoá</option>
                                <option value="Núcleo Bandeirante">Núcleo Bandeirante</option>
                                <option value="Ceilândia">Ceilândia</option>
                                <option value="Guará">Guará</option>
                                <option value="Cruzeiro">Cruzeiro</option>
                                <option value="Samambaia">Samambaia</option>
                                <option value="Santa Maria">Santa Maria</option>
                                <option value="São Serbastião">São Serbastião</option>
                                <option value="Recanto das Emas">Recanto das Emas</option>
                                <option value="Lago Sul">Lago Sul</option>
                                <option value="Riacho Fundo 1">Riacho Fundo 1</option>
                                <option value="Lago Norte">Lago Norte</option>
                                <option value="Candangolândia">Candangolândia</option>
                                <option value="Águas Claras">Águas Claras</option>
                                <option value="Riacho Fundo 2">Riacho Fundo 2</option>
                                <option value="Sudoeste">Sudoeste</option>
                                <option value="Varjão">Varjão</option>
                                <option value="Park Way">Park Way</option>
                                <option value="Estrutural">Estrutural/SCIA</option>
                                <option value="Sobradinho II">Sobradinho II</option>
                                <option value="Jardim Botânico">Jardim Botânico</option>
                                <option value="Itapoã">Itapoã</option>
                                <option value="SIA">SIA</option>
                                <option value="Vicente Pires">Vicente Pires</option>
                                <option value="Fercal">Fercal</option>
                                <option value="Sol Nascente">Sol Nascente</option> 
                            <option value="Arniqueira">Arniqueira</option>
                            </select>
                    </div>

                    <div class="div_input">
                        <label >Tipo do lixo </label>
            
                            <select class="op" aria-label="Default select example" name="tipo" id="">
                            <option disabled selected >Escolhar o tipo do lixo:</option>
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
                        <label for="endereco">CEP:</label>
                        <input type="number" class="input"  name="endereco" id="endereco"  minlength="5" maxlength="60">
                    </div> 

                    <div class="div_input">
                        <label for="text">Complemento:</label>
                        <input type="text" class="input"  name="complemento" id="complemento"  minlength="5" maxlength="60">
                    </div>  

                    <div class="div_input" style='margin:10px'>
                        <label >Foto</label>
                        <input class="input" type="file" name="file" id="file">
                    </div>

                        <div class="div_input">
                            <button class="bnt" >Denunciar</button> 
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
                    <img style= "height: 300px; width: 330px; border-radius: 5%; "src="./../../img/make_denu.jpg" alt="">
                
                 
          
            </div>
        </div>

    </body>
</html> 



