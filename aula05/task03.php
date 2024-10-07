<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula05 - task03</title>
    </head>

    <body>
        <?php
        // criando a classe contador
        class Contador {
            // criando atributos
            private $cont;

            // construtor inicializando os atributos
            public function __construct () {
                $this->cont = 0; // iniciando contador em zero.
            }

            // método zerar
            public function zerarCont() {
                $this->cont = 0; // zerando contador.
            }

            // método incrementar 
            public function incrementarCont() {
                $this->cont++; // incrementando contador a cada execução.
            }

            // método retornar (get)
            public function getCont() {
                return $this->cont;
            }
        }

        // testando a execução o contador
        $contador = new Contador();
        echo "Valor inicial do contador: " . $contador->getCont() . "<br>"; // deve retornar 0

        $contador->incrementarCont();
        echo "Valor após incrementar: " . $contador->getCont() . "<br>"; // deve retornar 1

        $contador->incrementarCont();
        echo "Valor após novo incremento: " . $contador->getCont() . "<br>"; // deve retornar 2

        $contador->zerarCont();
        echo "Valor após zerar: " . $contador->getCont() . "<br>"; // deve retornar 0
        ?>
    </body>
</html>