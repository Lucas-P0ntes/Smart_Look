<?php
session_start();
require_once('conexao.php');
require_once('funcoa_validacao.php');
$database = new Database();
$db = $database->conectar();

if( isset($_POST['cidade']) && isset($_POST['tipo']) && isset($_POST['endereco']) && isset($_POST['complemento']) && isset($_FILES['file'])){  
    $local=$_POST['cidade'];
    $tipo=$_POST['tipo'];

    $endereco=$_POST['endereco'];
    
    $complemento=$_POST['complemento'];
    $file =$_FILES['file'];
    $date = date('d/m/Y');
    $cpf=$_SESSION['cpf'];
    $extensao = pathinfo($file['name'], PATHINFO_EXTENSION);
    $extensao = strtolower($extensao);
    if((!empty($local)  && !empty($tipo)  && !empty($endereco)    && !empty($date)  && !empty($file))){

        if(valida_cep($endereco)){

            if($extensao === "jpeg" ||  $extensao === "png" ||  $extensao === "jpg" ||  $extensao === "jfif" ){
                
                $nome_file = $file['name'];
                $diretorio= "./../../views/img_denu/";
                move_uploaded_file($_FILES['file']['tmp_name'],$diretorio.$nome_file);
                $sql_cadastro ="INSERT INTO tbl_denuncias (id, Regiao_adm, tipo_lixo, cep_rua, complemento, img, data ,validacao,cpf) values (null, '$local', '$tipo', '$endereco', '$complemento','$nome_file','$date','v','$cpf' );";
                $query_cadastro = $db->prepare( $sql_cadastro );
                $query_cadastro->execute();
                
                header('Location: ./../../views/all_denounce.php');
            }
        }else{
            $_SESSION['erro_vazio']="O formato do CEP está invalido, tente retirar o traço ;";
            header('Location: ./../../views/make_denounce.php');

        }

    }else{
        $_SESSION['erro_vazio']="Algum dos campo foi enviado vazio;";
        header('Location: ./../../views/make_denounce.php');
        
    }
   
}else{
    $_SESSION['erro_vazio']="Algum dos campo foi enviado vazio;";
        header('Location: ./../../views/make_denounce.php');
        
}

