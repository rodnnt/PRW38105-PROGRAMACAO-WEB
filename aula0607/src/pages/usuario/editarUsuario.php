<?php
    require '../PRW38105-PROGRAMACAO-WEB/aula0607/src/actions/usuario.php';

    if ( session_status() == PHP_SESSION_NONE ) {
        session_start();
    }
    
    if(isset($_GET['id_usuario'])){
        $id_usuario = $_GET['id_usuario'];
        $usuario = consultarUsuarioById($id_usuario);
    }
?>

<!doctype html>
<html lang="pt-br">

    <head>
        <title>Editar Usuário</title>
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
                <h1>Editar Usuário</h1>
            </div>

            <form action="../../actions/usuario.php" method="post">

                <div class="form-group">
                    <input type="number" class="form-control" name="id_usuario" id="id_usuario" 
                    value=<?php echo $usuario['id_usuario']?> hidden>
                </div>

                <div class="form-group">
                    <label for="nome">Nome do Usuário:</label>
                    <input type="text" class="form-control" name="nome" id="nome"
                    value='<?php echo $usuario['nome']?>' >
                </div>

                <div class="form-group">
                    <label for="email">E-mail do Usuário:</label>
                    <input type="email" class="form-control" name="email" id="email"
                    value='<?php echo $usuario['email']?>'>
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone do Usuário:</label>
                    <input type="text" class="form-control" name="telefone" id="telefone"
                    value='<?php echo $usuario['telefone']?>'>
                </div>

                <div class="form-group">
                    <label for="endereco">Endereço do Usuário:</label>
                    <input type="text" class="form-control" name="endereco" id="endereco"
                    value='<?php echo $usuario['endereco']?>'>
                </div>

                <div class="form-group">
                    <a href="./listarUsuario.php" class="btn btn-secondary">Cancelar</a>
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