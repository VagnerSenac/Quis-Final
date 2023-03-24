<?php
include "conexao.php";
$pergunta = $_POST['pergunta'];
$alternativa1 = $_POST['alternativa1']; 
$resp1 = $_POST['resp1'];
$alternativa2 = $_POST['alternativa2'];
$resp2 = $_POST['resp2'];
$alternativa3 = $_POST['alternativa3'];
$resp3 = $_POST['resp3'];
$alternativa4 = $_POST['alternativa4'];
$resp4 = $_POST['resp4'];
$foto = $_POST['fundo'];

$sqlGravar = "insert into t_quiz(pergunta, alternativa1, alternativa2, alternativa3, alternativa4, imagem, resp1, resp2, resp3, resp4) values('$pergunta', '$alternativa1', '$alternativa2', '$alternativa3', '$alternativa4', '$foto', '$resp1', '$resp2', '$resp3', '$resp4')";
mysqli_query($conexao, $sqlGravar);
mysqli_close($conexao);
header("location: quiz-novo.php?msg=quizcad");




?>

