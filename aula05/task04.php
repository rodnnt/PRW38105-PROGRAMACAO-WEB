<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula05 - task04</title>
    </head>

    <body>
        <?php
        // criando a classe biblioteca
            class Biblioteca {
                private $livros = [];

                // método para cadastrado de livros
                public function cadastrar($titulo, $autor) {                                                                // necessário título e autor para iniciar um libro
                    $this->livros[$titulo] = [
                        'autor' => $autor,
                        'disponivel' => true                                                                                // livro inicia disponível
                    ];
                    echo "Livro '{$titulo}' cadastrado com sucesso!<br>";
                }

                // método para fazer empréstimos de livros
                public function emprestar($titulo) {
                    if (isset($this->livros[$titulo])) {                                                                    // verifica se o livro está disponível para empréstimo, e altera a disponilidade do livro para não disponível
                        $this->livros[$titulo]['disponivel'] = false;
                        echo "Livro '{$titulo}' emprestado com sucesso!<br>";
                    } else {
                        echo "Desculpe, o livro '{$titulo}' não foi encontrado.<br>";                                       // se o livro não está cadastrado, informa que o livro não foi encontrado
                    }
                }

                // método para devolver livros
                public function devolver($titulo) {
                    if (!$this->livros[$titulo]['disponivel']) {                                                            // incluído o '!' para verificar se o livro aceitando devolução
                        $this->livros[$titulo]['disponivel'] = true;                                                        // altera a disponilidade do livro para disponível
                        echo "Livro '{$titulo}' devolvido com sucesso!<br>";
                    } else {                                                                                                // se disponível, informa que o livro não pode ser devolvido
                        echo "Desculpe, o livro '{$titulo}' não foi encontrado.<br>";                                      
                    }
                }

                // método para verificar disponibilidade de livros
                public function verificarDisponibilidade($titulo) {
                    if (isset($this->livros[$titulo])) {
                        if ($this->livros[$titulo]['disponivel']) {
                            echo "O livro '{$titulo}' está disponível.<br>";
                        } else {
                            echo "O livro '{$titulo}' não está disponível.<br>";
                        }
                    } else {
                        echo "O livro '{$titulo}' não foi encontrado na biblioteca.<br>";
                    }
                }
            }

            // testando a execução da biblioteca
            $biblioteca = new Biblioteca();
            $biblioteca->cadastrar("1984", "George Orwell");
            $biblioteca->cadastrar("A Revolução dos Bichos", "George Orwell");
            echo "<br>";

            $biblioteca->verificarDisponibilidade("1984"); // deve indicar que o livro está disponível
            $biblioteca->emprestar("1984"); // deve emprestar o livro
            $biblioteca->verificarDisponibilidade("1984"); // deve indicar que o livro não está disponível
            echo "<br>";

            $biblioteca->devolver("1984"); // deve devolver o livro
            $biblioteca->verificarDisponibilidade("1984"); // deve indicar que o livro está disponível
        ?>
    </body>
</html>