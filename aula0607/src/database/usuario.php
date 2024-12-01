<?php
    function consultarUsuariosBD($conexao){
        $buscar_usuarios = "select * from usuario";
        $query_usuarios = mysqli_query($conexao, $buscar_usuarios);
    
        $listaUsuarios = mysqli_fetch_all($query_usuarios, MYSQLI_ASSOC);
    
        mysqli_close($conexao);
    
        return $listaUsuarios;
    }
    
    function cadastrarUsuarioBD($conexao, $nome, $email, $telefone, $endereco){
        $inserir_usuario = "insert into usuario (nome, email, telefone, endereco) values ('$nome', '$email', '$telefone', '$endereco')";
        $query_usuario = mysqli_query($conexao, $inserir_usuario);

        if($query_usuario){
            return true;
        } else { 
            return false;
        }
    }

    function consultarUsuarioByIdBd($conexao, $id_usuario){
        $buscar_usuario = "select * from usuario where id_usuario = $id_usuario";
        $query_usuario = mysqli_query($conexao, $buscar_usuario);

        $usuario = mysqli_fetch_array($query_usuario, MYSQLI_ASSOC);

        mysqli_close($conexao);

        return $usuario;
    }

    function editarUsuarioBD($conexao, $id_usuario, $nome, $email, $telefone, $endereco, $data_registro){
        $editar_usuario = "update usuario set nome='$nome', email='$email', telefone='$telefone', endereco='$endereco', data_registro=CURRENT_TIMESTAMP() WHERE id_usuario=$id_usuario";
        $query_usuario = mysqli_query($conexao, $editar_usuario);

        if($query_usuario){
            return true;
        } else { 
            return false;
        }
    }

    function excluirUsuarioBD($conexao, $id_usuario){
        $excluir_usuario = "delete from usuario where id_usuario = '$id_usuario'";
        $query_usuario = mysqli_query($conexao, $excluir_usuario);

        if($query_usuario){
            return true;
        } else { 
            return false;
        }
    }

    if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {

        $id_usuario = $_POST[ 'id_usuario' ];
    
        if ( $_POST[ 'senha' ] != $_POST[ 'confirmar-senha' ] ) {
    
            $_SESSION[ 'mensagem' ] = 'As senhas não conferem!';
            $_SESSION[ 'acao' ] = false;
    
            if ( isset( $_POST[ 'inserir' ] ) ) {
                header( 'location:../pages/usuario/inserirUsuario.php?erro=1' );
            } else {
                header( 'location:../usuario/editarUsuario.php?id=' . $id_usuario . '&erro=1' );
            }
            exit();
    
        } else {
    
            $nome = $_POST[ 'nome' ];
            $email = $_POST[ 'email' ];
            $senha = password_hash( $_POST[ 'senha' ], PASSWORD_DEFAULT );
            $telefone = $_POST[ 'telefone' ];
            $endereco = $_POST[ 'endereco' ];
    
            if ( isset( $_POST[ 'inserir' ] ) ) {
    
                if ( cadastrarUsuarioBD( $conexao, $nome, $email, $senha, $telefone, $endereco ) ) {
                    $_SESSION[ 'mensagem' ] = 'Usuario inserido com sucesso!';
                    $_SESSION[ 'acao_sucesso' ] = true;
    
                    header( 'location:../pages/usuario/listarUsuario.php' );
                    exit();
                } else {
                    $_SESSION[ 'mensagem' ] = 'Erro ao cadastrar usuario!';
                    $_SESSION[ 'acao_sucesso' ] = false;
                    header( 'location:../pages/usuario/listarUsuario.php' );
                    exit();
                }
    
            } else if ( isset( $_POST[ 'editar' ] ) ) {
                if ( editarUsuarioBD( $conexao, $id_usuario, $nome, $email, $senha, $telefone, $endereco ) ) {
                    $_SESSION[ 'mensagem' ] = 'Usuario alterado com sucesso!';
                    $_SESSION[ 'acao_sucesso' ] = true;
    
                    header( 'location:/projetoaula/src/pages/usuario/listarUsuario.php' );
                    exit();
                } else {
                    $_SESSION[ 'mensagem' ] = 'Erro ao editar usuario!';
                    $_SESSION[ 'acao_sucesso' ] = false;
                    header( 'location:../pages/usuario/listarUsuario.php' );
                    exit();
                }
    
            } else if ( isset( $_POST[ 'excluir' ] ) ) {
                if ( excluirUsuarioBD( $conexao, $id_usuario ) ) {
                    $_SESSION[ 'mensagem' ] = 'Usuario excluído com sucesso!';
                    $_SESSION[ 'acao_sucesso' ] = true;
    
                    header( 'location:../pages/usuario/listarUsuario.php' );
                    exit();
                } else {
                    $_SESSION[ 'mensagem' ] = 'Erro ao excluir usuario!';
                    $_SESSION[ 'acao_sucesso' ] = false;
                    header( 'location:../pages/usuario/listarUsuario.php' );
                    exit();
                }
            }
        }
    }
?>