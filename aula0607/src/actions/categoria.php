<?php
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    require $_SERVER['DOCUMENT_ROOT'] . '/inicial/PRW38105-PROGRAMACAO-WEB/aula0607/conexao.php';
    require $_SERVER['DOCUMENT_ROOT'] . '/inicial/PRW38105-PROGRAMACAO-WEB/aula0607/src/database/categoria.php';

    function consultarCategorias(){
        global $conexao;
        return consultarCategoriasBD($conexao);
    }

    function consultarCategoriaById($id_categoria){
        global $conexao;
        return consultarCategoriaByIdBD($conexao, $id_categoria);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id_categoria = $_POST['id_categoria'];
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];

        if(isset($_POST['inserir'])){

            if(cadastrarCategoriaBD($conexao, $nome, $descricao)){
                $_SESSION['mensagem'] = 'Categoria cadastrada com sucesso';
                $_SESSION['acao_sucesso'] = true;
                header('location:../pages/produto//categoria/listarCategoria.php');
                exit();
            } else {
                $_SESSION['mensagem'] = 'Erro ao tentar cadastrar categoria';
                $_SESSION['acao_sucesso'] = false;
                header('location:../pages/produto//categoria/listarCategoria.php');
                exit();
            }

        } else if(isset($_POST['editar'])){

            if(editarCategoriaBD($conexao, $id_categoria, $nome, $descricao)){
                $_SESSION['mensagem'] = 'Categoria alterada com sucesso';
                $_SESSION['acao_sucesso'] = true;
                header('location:../pages/produto/categoria/listarCategoria.php');
            } else {
                $_SESSION['mensagem'] = 'Erro ao tentar alterar a categoria';
                $_SESSION['acao_sucesso'] = false;
                header('location:../pages/produto/categoria/listarCategoria.php');
                exit();
            }

        } else if(isset($_POST['excluir'])){
            
            if(excluirCategoriaBD($conexao, $id_categoria)){
                $_SESSION['mensagem'] = 'Categoria deletada com sucesso';
                $_SESSION['acao_sucesso'] = true;
                header('location:../pages/produto/categoria/listarCategoria.php');
                exit();
            } else {
                $_SESSION['mensagem'] = 'Erro ao tentar deletar a categoria';
                $_SESSION['acao_sucesso'] = false;
                header('location:../pages/produto/categoria/listarCategoria.php');
                exit();
            }
        }
    }
?>