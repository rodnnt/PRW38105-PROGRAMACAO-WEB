<?php
    $host = 'localhost';
    $user = 'root';
    $password= '';
    $bd_name = 'comercio';
    $port = 3307;

    $conexao = mysqli_connect($host, $user, $password, $bd_name, $port);

    //http://localhost/inicial/PRW38105-PROGRAMACAO-WEB/aula07/conexao.php
    if(!$conexao){
        die("Conexão falhou: " . mysqli_connect_error());
    } 
?>