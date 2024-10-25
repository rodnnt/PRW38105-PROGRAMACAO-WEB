<?php
    require 'C:/xampp/htdocs/inicial/PRW38105-PROGRAMACAO-WEB/aula07/src/actions/produto.php';

    $listaProdutos = consultarProdutos();
?>

<!doctype html>
<html lang="pt-br">

    <head>
        <title>Listar Produtos</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

    </head>

    <body>

        <div class="container">

            <div class="row d-flex justify-content-between align-items-center ">
                <h1>Lista de Produtos</h1>

                <a href="./inserirProduto.php" class="btn btn-primary">
                    <i class="bi bi-plus-square"></i>
                    <span>Novo Produto</span>
                </a>
            </div>

            <div class="row">

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID PRODUTO</th>
                            <th>NOME</th>
                            <th>DESCRIÇÃO</th>
                            <th>QUANTIDADE</th>
                            <th>PREÇO</th>
                            <th>DATA DE REGISTRO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($listaProdutos as $produto) { ?>
                            <tr>
                                <td scope="row"> <?php echo $produto['id_produto'] ?> </td>
                                <td> <?php echo $produto['nome'] ?> </td>
                                <td> <?php echo $produto['descricao'] ?> </td>
                                <td> <?php echo $produto['quantidade'] ?> </td>
                                <td> <?php echo $produto['preco'] ?> </td>
                                <td> <?php echo $produto['data_registro'] ?> </td> 
                                <td>
                                    <a class='btn btn-primary' href="./editarProduto.php?id_produto=<?php echo $produto['id_produto'] ?>">
                                            <i class='bi bi-pencil-square'></i></a>   
                                    </td>

                                <td>
                                    <form action="../../actions/produto.php" method="post">
                                        <input type="hidden" name="id_produto" id="id_produto" value=<?php echo $produto['id_produto']?> hidden>
                                        <button type="submit" name="excluir" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir o produto?')">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>

        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        
    </body>

</html>