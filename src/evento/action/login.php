<?php
session_start();
require_once('conexao.php');
$database = new Database();
$db = $database->conectar();

if(isset($_POST['email']) && isset($_POST['senha']) ){  

    $email =$_POST['email'];
    $senha = $_POST['senha'];

    $sql_login ="select * from pessoas where email = '$email' and senha='$senha' ;";
    $query_login = $db->prepare( $sql_login );
	$query_login->execute();
    $list_login = $query_login->fetchAll();
   
    if($list_login[0][0]>0){
        $_SESSION['nome'] = $list_login[0][1];
        $_SESSION['cpf'] = $list_login[0][5];
       
        header('Location: ./../../views/my_dashboard.php');
        
    }else{
        
        header('Location: ./../../views/login/login.php');
    }
   
        
}

