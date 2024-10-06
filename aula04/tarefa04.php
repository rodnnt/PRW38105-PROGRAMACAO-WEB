<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Avaliação do Site</title>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Avaliação do Site</h2>

        <?php
        // Iniciando as variáveis
        $classificacao = '';
        $secao_favorita = '';
        $outra_secao = '';
        $comentarios = '';
        $nome = '';
        $email = '';
        $telefone = '';
        $notificacoes = 'Não';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $classificacao = $_POST['classificacao']; 
            $secao_favorita = $_POST['opcoes']; 
            $outra_secao = $_POST['outra']; 
            $comentarios = $_POST['mensagem']; 
            $nome = $_POST['nome']; 
            $email = $_POST['email']; 
            $telefone = $_POST['fone']; 
            if (isset($_POST['notificacoes'])) {
                $notificacoes = 'Sim';
            } else {
                $notificacoes = 'Não';
            }    

            // Imprimir os dados 
            echo "<h1>Dados Recebidos</h1>";
            echo "<p><b>Classificação do site:</b> $classificacao</p>";
            echo "<p><b>Seção favorita:</b> $secao_favorita</p>";
            if (!empty($outra_secao)) {
                echo "<p><b>Outra seção favorita:</b> $outra_secao</p>";
            }
            echo "<p><b>Comentários:</b> $comentarios</p>";
            echo "<p><b>Nome:</b> $nome</p>";
            echo "<p><b>E-mail:</b> $email</p>";
            echo "<p><b>Telefone:</b> $telefone</p>";
            echo "<p><b>Deseja receber notificações:</b> $notificacoes</p>"; 
        } else {
        ?>

        <form method="POST" action="">
            <div class="form-group">
                <label><b>O que você achou do site?</b></label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="classificacao" id="muito-bom" value="Muito bom" required>
                    <label class="form-check-label" for="muito-bom">Muito bom</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="classificacao" id="bom" value="Bom" required>
                    <label class="form-check-label" for="bom">Bom</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="classificacao" id="regular" value="Regular" required>
                    <label class="form-check-label" for="regular">Regular</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="classificacao" id="um-lixo" value="Um Lixo" required>
                    <label class="form-check-label" for="um-lixo">Um Lixo</label>
                </div>
            </div>            

            <div class="form-group">
                <label><b>Qual a seção que você mais gostou?</b></label>
                <select class="form-control" id="opcoes" name="opcoes" required>
                    <option value="" disabled selected>Selecione uma opção</option>
                    <option value="opcao1">Em cartaz</option>
                    <option value="opcao2">Opção 2</option>
                    <option value="opcao3">Opção 3</option>
                    <option value="opcao4">Opção 4</option>
                </select>
                <div class="mt-2">
                    <label for="outra">Outra:</label>
                    <input type="text" class="form-control" id="outra" name="outra" maxlength="256">
                </div>
            </div>

            <div class="form-group">
                <label><b>Digite seus comentários no campo abaixo:</b></label>
                <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label><b>Diga-nos como entrar em contato com você:</b></label>
                <div class="form-row">
                    <div class="col">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="col">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="col">
                        <label for="fone">Fone</label>
                        <input type="tel" class="form-control" id="fone" name="fone">
                    </div>
                </div>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="notificacoes" name="notificacoes">
                <label class="form-check-label" for="notificacoes">Quero receber as novidades do site por e-mail</label>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Enviar Dados</button>
                <button type="reset" class="btn btn-secondary">Limpar Formulário</button>
            </div>
        </form>

        <?php } // Fim do else ?>
    </div>

    <!-- Bootstrap JS and dependencies (Optional but recommended for better functionality) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>