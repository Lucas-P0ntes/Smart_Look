<?php
session_start();
if(!$_SESSION['cpf']){
    header("location: ./login/sair.php");
}
require_once('./../evento/action/conexao.php');
require_once("./../componentes/funcoes.php");
$database = new Database();
$db = $database->conectar();
$cpf=$_SESSION['cpf'];
$sql_dados_pessoas="Select * from tbl_cadastro_usuarios where cpf='".$cpf."';";

$sql_dados_pessoas=$db->prepare($sql_dados_pessoas);
$sql_dados_pessoas->execute();
$sqlresul=$sql_dados_pessoas ->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/perfil_edit.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="./../componentes/componentes.css" rel="stylesheet">
    <title>Smart Look</title>
</head>
    <body>
    <?php include_once("./../componentes/navbar.php")?>

        <div class="main">

            <div class="page">
                <div class="page_box">
                    <div class="img_perfil">
                    <div class="div_titulo">
                        <h1>Alterar foto de perfil</h1>
                    </div>
                    <?php
                        if(empty($sqlresul[0][6])){

                            echo('<img src="./img_perfil/img_profile_cadastro.PNG" alt="">');
                        }else{
                            echo('<img src="./img_perfil/'.$sqlresul[0][6].'" alt="foto">');
                        }
                    ?>
                    <form action="./../evento/action/photo_perfil.php" method="post" class="form" enctype="multipart/form-data">
                    <div class="" >
                        <input class="file" type="file" name="file" id="file">
                    </div>

                        <div class="div_input">
                            <button class="bnt" >Salvar foto</button> 
                        </div>
                    </from>


               </div>

               <div class="info">
                <div class="div_titulo">
                    <h1>Perfil e configurações</h1>
                </div>
               <form action="./../../evento/action/cadastro.php" method="post" class="form">

                    <div class="campos_input">
                        <label for="nome">Nome:</label>
                            <input class="input" type="text" name="nome" value="<?php echo($sqlresul[0][0]);?>" placeholder="Primeiro nome:"  minlength="5" maxlength="31"  >
                    </div>
                    <?php if((isset($_SESSION['erro_nome']))){echo('<p class="erro"> "'.$_SESSION['erro_nome'].'"</p>');unset($_SESSION['erro_nome']);}?>

                    <div class="campos_input">
                        <label for="nome">Nome completo:</label>
                            <input class="input" type="text" name="nome" value="<?php echo($sqlresul[0][1]);?>" placeholder="Primeiro nome:"  minlength="5" maxlength="31"  >
                    </div>
                    <?php if((isset($_SESSION['erro_nome']))){echo('<p class="erro"> "'.$_SESSION['erro_nome'].'"</p>');unset($_SESSION['erro_nome']);}?>


                    <div class=campos_input>
                        <label for="email">E-mail:</label>
                        <input class="input" type="email" name="email" value="<?php echo($sqlresul[0][2]);?>" placeholder="E-mail completo:"  minlength="5" maxlength="31"  >
                    </div>
                    <?php if((isset($_SESSION['erro_email']))){echo('<p class="erro"> "'.$_SESSION['erro_email'].'"</p>');unset($_SESSION['erro_email']);}?>

                    <div class=campos_input>
                        <label for="number">Telefone:</label>
                        <input type="number" class="input"  name="tel" value="<?php echo($sqlresul[0][3]);?>" placeholder="Telefone pessoal:"  minlength="5" maxlength="30">
                    </div> 
                    <?php if((isset($_SESSION['erro_tel']))){echo('<p class="erro"> "'.$_SESSION['erro_tel'].'"</p>');unset($_SESSION['erro_tel']);}?>

                    <div class=campos_input>
                        <label for="senha">Alterar senha:</label>
                        <input type="password" class="input"  name="senha1" value="<?php echo($sqlresul[0][4]);?>" placeholder="Senha:"   minlength="5" maxlength="30">
                    </div> 

                    <div class=campos_input>
                        <label for="senha">Confirmar a senha:</label>
                        <input type="password" class="input"  name="senha2"  placeholder="Repita a senha:" value="<?php echo($sqlresul[0][4]);?>" minlength="5" maxlength="30">
                    </div>  
                    <?php if((isset($_SESSION['erro_pass']))){echo('<p class="erro"> "'.$_SESSION['erro_pass'].'"</p>');unset($_SESSION['erro_pass']);}?>

                    <?php if((isset($_SESSION['erro_vazio']))){echo('<p class="erro"> "'.$_SESSION['erro_vazio'].'"</p>'); unset($_SESSION['erro_vazio']);}?>

                        <div class="">
                            <button class="bnt">Salvar</button> 
                        </div>

                    </form>  
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>