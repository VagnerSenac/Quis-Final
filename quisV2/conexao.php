<?php 
$servidor = '127.0.0.1';
$banco = 'quis';
$usuariobd = 'root';
$senhabd = '';

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'quis');
 
try{
    $conexao = mysqli_connect($servidor, $usuariobd, $senhabd, $banco);
    
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Defina o modo de erro PDO para exceção
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
}catch(Exception  $e){
    echo "Erro na conexão: $e";
    exit();
} 
?>
