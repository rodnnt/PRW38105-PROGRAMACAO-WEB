<?php
    function consultarCategoriasBD($conexao){
        $buscar_categorias = 'select * from categoria';
        $query_categorias = mysqli_query($conexao, $buscar_categorias);

        $listaCategorias = mysqli_fetch_all($query_categorias, MYSQLI_ASSOC);

        mysqli_close($conexao);

        return $listaCategorias;
    }

    function cadastrarCategoriaBD($conexao, $nome, $descricao){
        $inserir_categoria = "insert into categoria (nome, descricao) values ('$nome', '$descricao')";
        $query_categoria = mysqli_query($conexao, $inserir_categoria);

        if($query_categoria){
            return true;
        } else {
            return false;
        }
    }

    function consultarCategoriaByIdBD($conexao, $id_categoria){
        $buscar_categoria = "select * from categoria where id_categoria = $id_categoria";
        $query_categoria = mysqli_query($conexao, $buscar_categoria);

        $categoria = mysqli_fetch_array($query_categoria, MYSQLI_ASSOC);

        mysqli_close($conexao);

        return $categoria;
    }

    function editarCategoriaBD($conexao, $id_categoria, $nome, $descricao){
        $editar_categoria = "update categoria set nome='$nome', descricao='$descricao' where id_categoria=$id_categoria";
        $query_categoria = mysqli_query($conexao, $editar_categoria);

        if($query_categoria){
            return true;
        } else {
            return false;
        }
    }

    function excluirCategoriaBD($conexao, $id_categoria){
        $excluir_categoria = "delete from categoria where id_categoria = '$id_categoria'";
        $query_categoria = mysqli_query($conexao, $excluir_categoria);

        if($query_categoria){
            return true;
        } else {
            return false;
        }
    }
?>