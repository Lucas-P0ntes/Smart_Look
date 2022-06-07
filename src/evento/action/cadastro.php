<?php
session_start();
require_once('conexao.php');
$database = new Database();
$db = $database->conectar();



if( isset($_POST['nome'])  && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['senha1']) && isset($_POST['senha2'])&& isset($_POST['cpf'])){  
    $nomes =$_POST['nome'];
    $emails =$_POST['email'];
    $tels=$_POST['tel'];
    $senha1s =$_POST['senha1'];
    $senha2s =$_POST['senha2'];
    $cpfs=$_POST['cpf'];
  
    if((!empty($nomes) && !empty($emails)  && !empty($emails)  && !empty($tels)  && !empty($senha1s)  && !empty($senha2s)  && !empty($cpfs))){

        $nome =$_POST['nome'];
        $email =$_POST['email'];
        $tel=$_POST['tel'];
        $senha1 =$_POST['senha1'];
        $senha2 =$_POST['senha2'];
        $cpf=$_POST['cpf'];
        
        if($senha1===$senha2){
            $senha = $senha1;
        
        $sql_cadastro ="INSERT INTO pessoas (id_pessoas, nome, email, number, senha, cpf) values (null, '$nome', '$email', '$tel', '$senha' ,'$cpf' );";
        $query_cadastro = $db->prepare( $sql_cadastro );
	    $query_cadastro->execute();
        }
    }

    
    
    
}

 header('Location: ./../../views/login/login.php');