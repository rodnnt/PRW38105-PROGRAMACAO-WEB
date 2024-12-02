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

        if ( $_POST[ 'senha' ] != $_POST[ 'confirmar-senha' ] ) {

            $_SESSION[ 'mensagem' ] = 'As senhas não conferem!';
            $_SESSION[ 'acao' ] = false;
    
            if ( isset( $_POST[ 'inserir' ] ) ) {
                header( 'location:../pages/cliente/inserirCliente.php?erro=1' );
            } else {
                header( 'location:../cliente/editarCliente.php?id=' . $idCliente . '&erro=1' );
            }
            exit();
    
        } else {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = password_hash( $_POST[ 'senha' ], PASSWORD_DEFAULT );
            $telefone = $_POST['telefone'];
            $endereco = $_POST['endereco'];
            $data_registro = $_POST['data_registro'];

            if(isset($_POST['inserir'])){

                if(cadastrarUsuarioBD($conexao, $nome, $email, $senha, $telefone, $endereco)){
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

                if(editarUsuarioBD($conexao, $id_usuario, $nome, $email, $senha, $telefone, $endereco, $data_registro)){
                    $_SESSION['mensagem'] = 'Usuário alterado com sucesso';
                    $_SESSION['acao_sucesso'] = true;
                    header('location:../pages/usuario/listarUsuario.php');

                } else {
                    $_SESSION['mensagem'] = 'Erro ao tentar alterar o usuário';
                    $_SESSION['acao_sucesso'] = false;
                    header('location:../pages/usuario/listarUsuario.php');  
                    exit();
                }

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
    }
?>