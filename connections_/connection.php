<?php 


$utf8 = header("Content-Type: text/html; charset=utf-8");
$conecta = new mysqli('localhost', 'root', '', 'empresa_estoque');
$conecta->set_charset('utf8');

if ( mysqli_connect_errno() ) {
    die("Conexão Falhou: " . mysqli_connect_errno() ); //die = matar a conexão
    
};

/*
$servername = "localhost"; 
$username   = "root";
$database   = "empresa_estoque";
$password   = " ";
$conecta    = mysqli_connect($servername, $username, $database, $password); 
*/

?>