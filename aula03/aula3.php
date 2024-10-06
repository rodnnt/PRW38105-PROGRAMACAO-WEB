<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>Introdução ao PHP</title>
</head>

<body>
    <!-- Cabeçalho -->
    <header class="bg-dark p-4 text-center">
        <link rel="stylesheet" href="styles.css">
        <h1>Meu Website</h1>
        <p class="lead">Uma página criada para apresentar as soluções dos exercicíos propostos,
            bem como praticar os conhecimentos de programação WEB</p>
    </header>

    <!-- Barra de Navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="aula3.php">
                <i class="bi bi-house-fill"></i> Início
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#secao1">Seção 1 (Exercícios 1-5)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#secao2">Seção 2 (Exercícios 5.a-8)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#secao3">Seção 3 (Galeria de Fotos)</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Seção 1 -->
    <section id="secao1" class="container my-2">
        <h2>Seção 1</h2>
        <div class="row">
            <!-- Exercício 1 -->
            <article class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Exercício 1</h2>
                        <?php
                        $nome = "Rodrigo Pereira Nonato";
                        $idade = 26;
                        echo "Eu sou $nome e tenho $idade anos.";
                        ?>
                    </div>
                </div>
            </article>

            <!-- Exercício 2 -->
            <article class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Exercício 2</h2>
                        <?php
                        $linguagem = "PHP";
                        echo "Programar em $linguagem é muito legal<br>";
                        echo 'Programar em $linguagem é muito legal<br><br>';
                        ?>
                        <small class="text-muted">
                            Nota-se que a menção da varíavel só funciona dentro de aspas duplas,
                            pois ao utilizar aspas simples a menção não é reconhecida
                        </small>
                    </div>
                </div>
            </article>

            <!-- Exercício 3 -->
            <article class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Exercício 3</h2>
                        <?php
                        $id = "fruta";
                        $fruta = "laranja";
                        echo $id . "<br>";
                        echo $$id . "<br>";
                        ?>
                        <div class="d-flex justify-content-end mt-4">
                            <small class="text-muted">
                                Nota-se que o uso duplo do cifrão ($), utilizado para mencionar a varíavel,
                                funciona com uma fórmula matemática, substituindo o primeiro $ ao lado da palavra, e
                                depois agrupando o resultado ao cifrão ao lado.
                                Imagino que isso poderá ser usado de forma condicional em algum momento, usando o
                                resultado de um condicional com uma varíavel e imprimindo o resultado na segunda variável ($).
                            </small>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Exercício 4 -->
            <article class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Exercício 4</h2>
                        <?php
                        echo "\"I'm the best PHP programmer in the World!\"";
                        ?>
                    </div>
                </div>
            </article>

            <!-- Exercício 5 -->
            <article class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Exercício 5</h2>
                        <div class="row">
                            <div class="col-md-3">
                                <?php
                                $a = 10;
                                $b = "20";
                                echo "a)<br>"
                                    . '$a = 10;' . "<br>"
                                    . '$b = "20";' . "<br>"
                                    . '$a + $b = ' . $a + $b . "<br><br>";
                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php
                                $a = "10";
                                $b = "20";
                                echo "b)<br>"
                                    . '$a = "10";' . "<br>"
                                    . '$b = "20";' . "<br>"
                                    . '$a + $b = ' . $a + $b . "<br><br>";
                                ?>
                            </div>
                            <div class="col-md-6">
                                <?php
                                $a = "10";
                                $b = "20 vinte";
                                echo "c)<br>"
                                    . '$a = "10";' . "<br>"
                                    . '$b = "20 vinte";' . "<br>"
                                    . '$a + $b = ' . $a + $b . "<br><br>";
                                ?>
                            </div>
                            <div class="col-md-6">
                                <?php
                                $a = "10";
                                $b = "vinte 20";
                                echo "d)<br>"
                                    . '$a = "10";' . "<br>"
                                    . '$b = "vinte 20";'
                                    //.'$a + $b = '. $a + $b ."<br><br>" /*comentado e reescrito abaixo para devida impressão*/
                                    . "<br><br>";
                                echo "<b>Fatal error</b>"
                                    . ':  Uncaught TypeError: Unsupported operand types: string + string in C:\xampp\htdocs\inicial\aula3\aula3.php:149 Stack trace: #0 {main} thrown in '
                                    . '<b>C:\xampp\htdocs\inicial\aula3\aula3.php</b>'
                                    . " on line "
                                    . '<b>149</b>';
                                ?>
                            </div>
                            <div class="col-md-6">
                                <?php
                                $a = "10";
                                $b = "20";
                                echo "e)<br>"
                                    . '$a = 10;' . "<br>"
                                    . '$b = "20";' . "<br>"
                                    . '$a . $b = ' . $a . $b . "<br><br>";
                                ?>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <small class="text-muted">
                                Após execução dos trechos, nota-se que o o PHP consegue reconhecer parcialmente números
                                dentro de variáveis, apenas conteúdo numérico, com aspas ou não, ele reconhece como numéro.
                                Já quando a variável contem texto junto, recebemos alertas ou erros. Quando o numeral está
                                no início do conteúdo ele faz a operação, mas quando está depois de algum outro conteúdo,
                                recebemos um erro fatal.
                            </small>
                        </div>
                    </div>
                </div>
            </article>

        </div>

    </section>
    <!-- Seção 2 -->
    <section id="secao2" class="container my-2">
        <h2>Seção 2</h2>
        <div class="row">
            <!-- Exercício 5.a -->
            <article class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Exercício 5.a</h2>
                        <?php
                        $estado =  [
                            "PR" => "Curitiba",
                            "RS" => "Porto Alegre",
                            "SC" => "Florianópolis",
                        ];

                        foreach ($estado as $sigla => $capital) {
                            echo "A capital do estado $sigla é $capital.<br>";
                        }
                        ?>
                    </div>
                </div>
            </article>

            <!-- Exercício 6 -->
            <article class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Exercício 6</h2>
                        <?php
                        echo "<table><tr>";
                        for ($i = 1; $i <= 10; $i++) {
                            echo "<td>$i</td>";
                        }
                        echo "</tr></table>";
                        ?>
                    </div>
                </div>
            </article>

            <!-- Exercício 7 -->
            <article class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Exercício 7</h2>
                        <?php
                        echo "<table>";
                        for ($i = 1; $i <= 10; $i++) {
                            if ($i % 2 == 0) {
                                echo "<tr><td>$i</td></tr>";
                            }
                        }
                        echo "</table>";
                        ?>
                    </div>
                </div>
            </article>

            <!-- Exercício 8 -->
            <article class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Exercício 8</h2>
                        <?php
                        $curso =  [
                            "PHP" => [
                                "data" => "25/09/2024",
                                "cargaHoraria" => "6",
                                "local" => "Itajaí",
                            ]/*,
                            "Python" => [
                                "data" => "28/09/2024",
                                "cargaHoraria" => "6",
                                "local" => "Remoto",
                            ]*/
                        ];

                        foreach ($curso as $nome => $info) {
                            echo "- Nome do curso: $nome <br>";

                            foreach ($info as $chave => $valor) {
                                echo "- Informação armazenada em \$curso['$nome']['$chave']: $valor <br>";
                            }
                            echo "<br>";
                        }
                        ?>
                    </div>
                </div>
            </article>
    </section>

    <!-- Seção 3 -->
    <section id="secao3" class="container my-2">
        <h2>Seção 3</h2>
        <div class="row">
            <!-- Exercício 9 -->
            <article class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Top 10 artistas mais ouvidos no Spotify</h2>
                        <div class="row gallery-row">
                            <?php
                            for ($i = 1; $i <= 10; $i++) {
                                $numImg = sprintf("%02d", $i);
                                echo "
                                    <div class='col custom-col mb-4'>
                                        <div class='imagem'>
                                            <img src='fotos/foto{$numImg}.jpg' alt='Foto {$numImg}' class='img-fluid'>
                                        </div>
                                    </div>
                                ";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <a href="#" id="backToTop" class="btn btn-primary">Voltar ao Topo</a>

    <!-- Rodapé -->
    <footer class="bg-dark text-light text-center py-3">
        <p>&copy; 2024 Meu Website - Todos os direitos reservados</p>
    </footer>

    <!-- Link para o JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Mostrar/ocultar o botão com base na rolagem
        window.onscroll = function() {
            const backToTopButton = document.getElementById('backToTop');
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                backToTopButton.style.display = 'block'; // Mostra o botão
            } else {
                backToTopButton.style.display = 'none'; // Oculta o botão
            }
        };

        // Rolagem suave ao clicar no botão
        document.getElementById('backToTop').onclick = function(event) {
            event.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        };
    </script>
</body>

</html>