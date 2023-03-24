<?php

session_start();
$resposta = $_POST['resposta'];
include "conexao.php";
$sqlGravar = "insert into t_resposta(resposta) values ('$resposta')";
mysqli_query($conexao, $sqlGravar);


$sqlDC = "SELECT COUNT(*) AS total FROM t_resposta WHERE resposta = 'dc'";
$resultadoDC = mysqli_query($conexao, $sqlDC);
if ($resultadoDC) {
    // Obter o total de registros com o mesmo resultado
    $row = mysqli_fetch_assoc($resultadoDC);
    $totalDC = $row['total'];
    
    echo "Existem $totalDC registros com o mesmo resultado.";
} 

$sqlMarvel = "SELECT COUNT(*) AS total FROM t_resposta WHERE resposta = 'marvel'";
$resultadoMarvel = mysqli_query($conexao, $sqlMarvel);
if ($resultadoMarvel) {
    // Obter o total de registros com o mesmo resultado
    $row = mysqli_fetch_assoc($resultadoMarvel);
    $totalMarvel = $row['total'];
    
    echo "Existem $totalMarvel registros com o mesmo resultado.";
}

$apagarRespostas = "DELETE FROM t_resposta";
mysqli_query($conexao, $apagarRespostas);

if ($totalDC > $totalMarvel){
    header('Location: fimA.php');
}elseif($totalDC < $totalMarvel){
    header('Location: fimB.php');
}else{
    header('Location: fimC.php');
}


mysqli_close($conexao);

?>