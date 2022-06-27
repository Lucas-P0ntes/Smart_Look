<?php
session_start();
require_once('conexao.php');
$database = new Database();
$db = $database->conectar();

if(isset($_POST["id"])){
    $id = $_POST["id"];
    $sql_up ="UPDATE denuncias SET validacao = 's' WHERE id = '$id'";
    
    $query_up = $db->prepare( $sql_up );
    $query_up->execute();
}
header('Location: ./../../views/my_denounce.php');