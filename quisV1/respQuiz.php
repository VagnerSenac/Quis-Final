<?php

session_start();
$resposta = $_POST['resposta'];
include "conexao.php";
$sqlGravar = "insert into t_resposta(resposta) values ('$resposta')";
mysqli_query($conexao, $sqlGravar);
mysqli_close($conexao);


header("location: pergunta.php");




?>