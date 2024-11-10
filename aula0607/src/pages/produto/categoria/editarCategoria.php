<?php
    require '../../../actions/categoria.php'
    ;

    $categoria = [];

    if(isset($_GET['id_categoria'])){
        $id_categoria = $_GET['id_categoria'];
        $categoria = consultarCategoriaById($id_categoria); // função para buscar a categoria
    }
?>

<!doctype html>
<html lang="pt-br">

    <head>
        <title>Editar Categoria</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

    </head>

    <body>

        <div class="container">
            <div class="row">
                <h1>Editar Categoria</h1>
            </div>

            <form action="../../../actions/categoria.php" method="post">

                <!-- ID da Categoria -->
                <div class="form-group">
                    <input type="number" class="form-control" name="id_categoria" id="id_categoria" 
                    value="<?php echo $categoria['id_categoria']; ?>" hidden>
                </div>

                <!-- Nome da Categoria -->
                <div class="form-group">
                    <label for="nome">Nome Categoria:</label>
                    <input type="text" class="form-control" name="nome" id="nome"
                    value="<?php echo htmlspecialchars($categoria['nome']); ?>" required>
                </div>

                <!-- Descrição da Categoria -->
                <div class="form-group">
                    <label for="descricao">Descrição Categoria:</label>
                    <input type="text" class="form-control" name="descricao" id="descricao"
                    value="<?php echo htmlspecialchars($categoria['descricao']); ?>" required>
                </div>

                <!-- Botões de Ação -->
                <div class="form-group">
                    <a href="./listarCategoria.php" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" name="editar" class="btn btn-primary">Editar</button>
                </div>

            </form>

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