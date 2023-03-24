<?php
$nome = $_POST['nome'];
$email = $_POST['email']; 
$senha = $_POST['senha']; 

include "conexao.php";
$sqlGravar = "insert into t_user(nome, email, senha) values('$nome', '$email', '$senha')";
mysqli_query($conexao, $sqlGravar);
mysqli_close($conexao);
header("location: login.php");
?>