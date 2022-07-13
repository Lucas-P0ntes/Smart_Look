<?php
session_start();
require_once('conexao.php');
$database = new Database();
$db = $database->conectar();

if( isset($_FILES['file'])){  
    $file =$_FILES['file'];
    $date = date('d/m/Y');
    $cpf=$_SESSION['cpf'];
    $extensao = pathinfo($file['name'], PATHINFO_EXTENSION);
    $extensao = strtolower($extensao);

    if($extensao === "jpeg" ||  $extensao === "png" ||  $extensao === "jpg" ||  $extensao === "jfif" ){

        $nome_file = $file['name'];
        $diretorio= "./../../views/img_perfil/";
        move_uploaded_file($_FILES['file']['tmp_name'],$diretorio.$nome_file);
        $sql_cadastro ="UPDATE tbl_cadastro_usuarios SET img_perfil = '".$nome_file."' WHERE cpf = '".$cpf."';" ;
        $query_cadastro = $db->prepare( $sql_cadastro );
        $query_cadastro->execute();

    }
   
}

 header('Location: ./../../views/perfil_edit.php');