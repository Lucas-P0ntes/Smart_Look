<?php
session_start();
require_once('conexao.php');
require_once('funcoa_validacao.php');
$database = new Database();
$db = $database->conectar();



if( isset($_POST['nome'])  && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['senha1']) && isset($_POST['senha2'])&& isset($_POST['cpf'])){  
    $nomes =$_POST['nome'];
    $emails =$_POST['email'];
    $tels=$_POST['tel'];
    $senha1s =$_POST['senha1'];
    $senha2s =$_POST['senha2'];
    $cpfs=$_POST['cpf'];
    
    if((!empty($nomes)  && !empty($emails)  && !empty($tels)  && !empty($senha1s)  && !empty($senha2s)  && !empty($cpfs))){

        if(valida_nome($nomes) && valida_email($emails) && valida_tel($tels) && valida_pass($senha1s,$senha2s) && valida_cpf($cpfs)) {


            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $tel= $_POST['tel'];
            $senha = $_POST['senha1'];
            $cpf = $_POST['cpf'];
            
           
            $sql_cadastro ="INSERT INTO pessoas (id_pessoas, nome, email, number, senha, cpf) values (null, '$nome', '$email', '$tel', '$senha' ,'$cpf' );";
            $query_cadastro = $db->prepare( $sql_cadastro );
            $query_cadastro->execute();
        }

    }

    
    
    
}

 header('Location: ./../../views/login/login.php');