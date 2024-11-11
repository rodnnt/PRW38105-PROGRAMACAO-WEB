<?php
    function consultarProdutosBD($conexao){
        $buscar_produtos = 'select * from produto';
        $query_produtos = mysqli_query($conexao, $buscar_produtos);

        $listaProdutos = mysqli_fetch_all($query_produtos, MYSQLI_ASSOC);

        foreach ($listaProdutos as &$produto) {
            $produto['nome_categoria'] = buscarNomeCategoria($conexao, $produto['id_categoria']);
        }

        mysqli_close($conexao);

        return $listaProdutos;
    }

    function cadastrarProdutoBD($conexao, $nome, $descricao, $quantidade, $preco, $id_categoria){
        $inserir_produto = "insert into produto (nome, descricao, quantidade, preco, id_categoria) values ('$nome', '$descricao', $quantidade, $preco, $id_categoria)";
        $query_produto = mysqli_query($conexao, $inserir_produto);

        if($query_produto){
            return true;
        } else { 
            return false;
        }
    }

    function consultarProdutoByIdBD($conexao, $id_produto){
        $buscar_produto = "select * from produto where id_produto = $id_produto";
        $query_produto = mysqli_query($conexao, $buscar_produto);

        $produto = mysqli_fetch_array($query_produto, MYSQLI_ASSOC);

        if ($produto) {
            $produto['nome_categoria'] = buscarNomeCategoria($conexao, $produto['id_categoria']);
        }

        mysqli_close($conexao);
        
        return $produto;
    }

    function buscarNomeCategoria($conexao, $id_categoria) {
        if (empty($id_categoria)) {
            return null; 
        }
        $buscar_nome_categoria = "select nome from categoria where id_categoria = $id_categoria";
        $query_categoria = mysqli_query($conexao, $buscar_nome_categoria);

        if ($query_categoria && mysqli_num_rows($query_categoria) > 0) {
            $categoria = mysqli_fetch_array($query_categoria, MYSQLI_ASSOC);
            $nome_categoria = $categoria['nome'];
        } else {
            $nome_categoria = null;
        }
        
        return $nome_categoria ?? 'Categoria não encontrada';
    }  

    function editarProdutoBD($conexao, $id_produto, $nome, $descricao, $quantidade, $preco, $id_categoria){
        $editar_produto = "update produto set nome='$nome', descricao='$descricao', quantidade='$quantidade', preco='$preco', id_categoria=$id_categoria where id_produto=$id_produto";
        $query_produto = mysqli_query($conexao, $editar_produto);
   
        if($query_produto){
            return true;
        } else { 
            return false;
        }
    }

    function excluirProdutoBD($conexao, $id_produto){
        $excluir_produto = "delete from produto where id_produto = '$id_produto'";
        $query_produto = mysqli_query($conexao, $excluir_produto);

        if($query_produto){
            return true;
        } else { 
            return false;
        }
    }
?>