<?php 
$servidor = 'sql307.epizy.com';
$banco = 'epiz_33855022_quis';
$usuariobd = 'epiz_33855022';
$senhabd = 'oGZLhUN07ZYoZsi';

define('DB_SERVER', 'sql307.epizy.com');
define('DB_USERNAME', 'epiz_33855022');
define('DB_PASSWORD', 'oGZLhUN07ZYoZsi');
define('DB_NAME', 'epiz_33855022_quis');
 
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
