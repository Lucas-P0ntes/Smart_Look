<?php
session_start();
if(!$_SESSION['nome']){
    header("location: ./login/sair.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./../componentes/navbar.css" rel="stylesheet">
    <title>Document</title>
</head>
<body style="margin:0px; padding:0px">
<?php include_once("./../componentes/navbar.php")?>
</body>
</html>