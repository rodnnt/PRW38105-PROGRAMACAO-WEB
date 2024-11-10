<?php
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    require $_SERVER['DOCUMENT_ROOT'] .'/inicial/PRW38105-PROGRAMACAO-WEB/aula0607/conexao.php';    
    require $_SERVER['DOCUMENT_ROOT'] .'/inicial/PRW38105-PROGRAMACAO-WEB/aula0607/src/database/usuario.php';

    function consultarUsuarios(){     
        global $conexao;      
        return consultarUsuariosBD($conexao);
    }

    function consultarUsuarioById($id_usuario){  
        global $conexao;          
        return consultarUsuarioByIdBd($conexao, $id_usuario);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id_usuario = $_POST['id_usuario'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $data_registro = $_POST['data_registro'];

        if(isset($_POST['inserir'])){

            if(cadastrarUsuarioBD($conexao, $nome, $email, $telefone, $endereco, $data_registro)){
                $_SESSION['mensagem'] = 'Usuário cadastrado com sucesso';
                $_SESSION['acao_sucesso'] = true;
                header('location:../pages/usuario/listarUsuario.php');
                exit();
            } else {
                $_SESSION['mensagem'] = 'Erro ao tentar cadastrar usuário';
                $_SESSION['acao_sucesso'] = false;
                header('location:../pages/usuario/listarUsuario.php');  
                exit();
            }

        } else if(isset($_POST['editar'])){

            if(editarUsuarioBD($conexao, $id_usuario, $nome, $email, $telefone, $endereco, $data_registro)){
                $_SESSION['mensagem'] = 'Usuário alterado com sucesso';
                $_SESSION['acao_sucesso'] = true;
                header('location:../pages/usuario/listarUsuario.php');

            } else {
                $_SESSION['mensagem'] = 'Erro ao tentar alterar o usuário';
                $_SESSION['acao_sucesso'] = false;
                header('location:../pages/usuario/listarUsuario.php');  
                exit();
            }

        // Excluir um usuário
        } else if(isset($_POST['excluir'])){
            
            if(excluirUsuarioBD($conexao, $id_usuario)){
                $_SESSION['mensagem'] = 'Usuário deletado com sucesso';
                $_SESSION['acao_sucesso'] = true;
                header('location:../pages/usuario/listarUsuario.php');  
                exit();
            } else {
                $_SESSION['mensagem'] = 'Erro ao tentar deletar o usuário';
                $_SESSION['acao_sucesso'] = false;
                header('location:../pages/usuario/listarUsuario.php');  
                exit();
            }
        }
    }
?>