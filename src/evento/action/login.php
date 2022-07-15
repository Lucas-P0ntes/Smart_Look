<?php
session_start();
require_once('conexao.php');
require_once('funcoa_validacao.php');
$database = new Database();
$db = $database->conectar();

if(isset($_POST['cpf']) && isset($_POST['senha'])  ){  
    
    $email =$_POST['cpf'];
    $senha1 = $_POST['senha'];

    if(valida_cpf_1($_POST['cpf'])){
        $senha=md5($senha1);
    
        $sql_login ="select * from tbl_login where cpf = '$email' and password='$senha' ;";
        $query_login = $db->prepare( $sql_login );
        $query_login->execute();
        $list_login = $query_login->fetchAll();
        
        if($list_login[0][0]>0){
            $_SESSION['nome'] = $list_login[0][1];
            $_SESSION['cpf'] = $list_login[0][2];
            
            header('Location: ./../../views/my_dashboard.php');
            
        }else{
            $_SESSION['erro_incorreto']="O cpf ou senha está incorreto;";
            header('Location: ./../../views/login/login.php');
        }
    
    }else{
        $_SESSION['erro_incorreto']="O cpf ou senha está incorreto;";
        header('Location: ./../../views/login/login.php');
    }
    
    
}


