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
?>