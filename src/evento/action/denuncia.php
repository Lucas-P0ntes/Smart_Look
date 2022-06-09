<?php
session_start();
require_once('conexao.php');
$database = new Database();
$db = $database->conectar();

if( isset($_POST['local']) && isset($_POST['tipo']) && isset($_POST['endereco']) && isset($_POST['complemento']) && isset($_FILES['file'])){  
    $local=$_POST['local'];
    $tipo=$_POST['tipo'];
    $endereco=$_POST['endereco'];
    $complemento=$_POST['complemento'];
    $file =$_FILES['file'];
    $date = date('d/m/Y');
    $cpf=$_SESSION['cpf'];
    $extensao = pathinfo($file['name'], PATHINFO_EXTENSION);
    $extensao = strtolower($extensao);
    if($extensao === "jpeg" ||  $extensao === "png" ||  $extensao === "jpg" ||  $extensao === "jfif" ){
        $nome_file = $file['name'];
        $diretorio= "./../../views/img_denu/";
        move_uploaded_file($_FILES['file']['tmp_name'],$diretorio.$nome_file);

        $sql_cadastro ="INSERT INTO denuncias (id, local, tipo, endereco, complemento, img, data, cpf ,validacao) values (null, '$local', '$tipo', '$endereco', '$complemento','$nome_file','$date','$cpf','v' );";
        $query_cadastro = $db->prepare( $sql_cadastro );
        $query_cadastro->execute();

    }
   
}

 header('Location: ./../../views/home.php');