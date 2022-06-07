<?php
session_start();
if(!$_SESSION['nome']){
    header('Location: ./../../views/login/login.php');
}
require_once('conexao.php');
$database = new Database();
$db = $database->conectar();

if(isset($_POST["buscar"])){
    $buscar=$_POST['buscar'];
    $_SESSION["buscar"] = $buscar;

    header("location: ./../../views/home.php");
}