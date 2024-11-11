<?php
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
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
        $id_categoria = $_POST['id_categoria'];

        if(isset($_POST['inserir'])){

            if(cadastrarProdutoBD($conexao, $nome, $descricao, $quantidade, $preco, $id_categoria)){
                $_SESSION['mensagem'] = 'Produto cadastrado com sucesso';
                $_SESSION['acao_sucesso'] = true;
                header('location:../pages/produto/listarProduto.php');
                exit();
            } else {
                $_SESSION['mensagem'] = 'Erro ao tentar cadastrar produtos';
                $_SESSION['acao_sucesso'] = False;
                header('location:../pages/produto/listarProduto.php');  
                exit();
            }

        } else if(isset($_POST['editar'])){

            if(editarProdutoBD($conexao, $id_produto, $nome, $descricao, $quantidade, $preco, $id_categoria)){
                $_SESSION['mensagem'] = 'Produto alterado com sucesso';
                $_SESSION['acao_sucesso'] = true;
                header('location:../pages/produto/listarProduto.php');

            } else {
                $_SESSION['mensagem'] = 'Erro ao tentar alterar o produto';
                $_SESSION['acao_sucesso'] = False;
                header('location:../pages/produto/listarProduto.php');  
                exit();
              }

        } else if(isset($_POST['excluir'])){
            
            if(excluirProdutoBD($conexao, $id_produto)){
                $_SESSION['mensagem'] = 'Produto deletado com sucesso';
                $_SESSION['acao_sucesso'] = true;
                header('location:../pages/produto/listarProduto.php');  
                exit();
            } else {
                $_SESSION['mensagem'] = 'Erro ao tentar deletar o produto';
                $_SESSION['acao_sucesso'] = False;
                header('location:../pages/produto/listarProduto.php');  
                exit();
            }
        }
    }
?>