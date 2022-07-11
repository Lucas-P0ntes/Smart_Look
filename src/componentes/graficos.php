<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

require_once('./../evento/action/conexao.php');
$database = new Database();
$db = $database->conectar();
$cpf=$_SESSION['cpf'];
///////////////////////////////////////////////////////////////
$sql_grafico_all = "SELECT count(*) FROM tbl_denuncias;";

$sql_grafico_all = $db->prepare($sql_grafico_all);
$sql_grafico_all -> execute();
$res_grafico_all = $sql_grafico_all->fetchAll();
///////////////////////////////////////////////////////////////
$sql_grafico_solved = "SELECT count(*) FROM tbl_denuncias where validacao = 's';";

$sql_grafico_solved = $db->prepare($sql_grafico_solved);
$sql_grafico_solved -> execute();
$res_grafico_solved = $sql_grafico_solved->fetchAll();
///////////////////////////////////////////////////////////////
$sql_grafico_my_all = "SELECT count(*) FROM tbl_denuncias where validacao='v'AND cpf='".$cpf."' ;";

$sql_grafico_my_all = $db->prepare($sql_grafico_my_all);
$sql_grafico_my_all -> execute();
$res_grafico_my_all = $sql_grafico_my_all->fetchAll();
////////////////////////////////////////////////////////////////
$sql_grafico_my_solved = "SELECT count(*) FROM tbl_denuncias where validacao='s'AND cpf='".$cpf."' ;";

$sql_grafico_my_solved = $db->prepare($sql_grafico_my_solved);
$sql_grafico_my_solved -> execute();
$res_grafico_my_solved = $sql_grafico_my_solved->fetchAll();
////////////////////////////////////////////////////////////////
$sql_grafico_my_canceled = "SELECT count(*) FROM tbl_denuncias where validacao='e'AND cpf='".$cpf."' ;";

$sql_grafico_my_canceled = $db->prepare($sql_grafico_my_canceled);
$sql_grafico_my_canceled -> execute();
$res_grafico_my_canceled = $sql_grafico_my_canceled->fetchAll();
?>

<script>
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Total de Denúncias','Denúncias solucionadas', 'Suas Denúncias',  'Suas Soluniondas ',  'Suas Canceladas'],
        datasets: [{
            label: 'Pessoas ajudas com nossas denúncias ',
            data: [
                <?php echo($res_grafico_all[0][0])?>, 
                <?php echo($res_grafico_solved[0][0])?>,
                <?php echo($res_grafico_my_all[0][0])?>,
                <?php echo($res_grafico_my_solved[0][0])?>,
                <?php echo($res_grafico_my_canceled[0][0])?>
            ],
            backgroundColor: [
              'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

