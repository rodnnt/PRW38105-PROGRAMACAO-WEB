<?php
    require $_SERVER['DOCUMENT_ROOT'] .'/inicial/PRW38105-PROGRAMACAO-WEB/aula0607/conexao.php';    
    require $_SERVER['DOCUMENT_ROOT'] .'/inicial/PRW38105-PROGRAMACAO-WEB/aula0607/src/database/produto.php';
    
    function consultarProdutos(){
        global $conexao;
        return consultarProdutosBD($conexao);
    }

    function consultarProdutoById($id_produto){
        global $conexao;
        return consultarProdutoByIdBD($conexao, $id_produto);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id_produto = $_POST['id_produto'];
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $quantidade = $_POST['quantidade'];
        $preco = $_POST['preco'];

        if(isset($_POST['inserir'])){

            if(cadastrarProdutoBD($conexao, $nome, $descricao, $quantidade, $preco)){
              header('location:../pages/produto/listarProduto.php');  
            }

        } else if(isset($_POST['editar'])){

            if(editarProdutoBD($conexao, $id_produto, $nome, $descricao, $quantidade, $preco)){
              header('location:../pages/produto/listarProduto.php');  
            }

        } else if(isset($_POST['excluir'])){
            echo 'TESTE';
            if(excluirProdutoBD($conexao, $id_produto)){
                echo $id_produto;
                header('location:../pages/produto/listarProduto.php');  
            }
        }
    }
?>