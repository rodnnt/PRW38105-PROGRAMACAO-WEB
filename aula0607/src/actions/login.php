<?php

    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    require $_SERVER[ 'DOCUMENT_ROOT' ] .'/aula0607/conexao.php';
    require $_SERVER[ 'DOCUMENT_ROOT' ] .'/aula0607/src/database/login.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if(validarLoginBD($conexao, $email, $senha)){
            header('location:../../../index.php');
            exit();
        } else{
            $_SESSION['mensagem'] = "Usuário e senha não conferem!";
            $_SESSION['acao_sucesso'] = false;

            header('location:../../pages/login/login.php');

            exit();

        }
    }

?>