<?php 
$servidor = '127.0.0.1';
$banco = 'quis';
$usuariobd = 'root';
$senhabd = '';

try{
    $conexao = mysqli_connect($servidor, $usuariobd, $senhabd, $banco);
}catch(Exception  $e){
    echo "Erro na conexão: $e";
    exit();
} 
?>