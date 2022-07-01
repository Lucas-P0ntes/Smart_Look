<?php require_once('conexao.php');
$email="lucas.pontes27@facebsook.com";
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    require_once('conexao.php');
$database = new Database();
$db = $database->conectar();
    $sql_cadastro ='SELECT id_pessoas from pessoas where  email="'.$email.'" ;';
    $query_cadastro = $db->prepare( $sql_cadastro );
    $query_cadastro->execute();
    $events = $query_cadastro->fetchAll();
    
    if(isset($events[0][0])){

        echo("  n-foi"); //false
    }
    else{
    echo("foi");//true

}}