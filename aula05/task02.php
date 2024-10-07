<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula05 - task02</title>
    </head>

    <body>
        <?php
        // criando a classe empregado
        class Empregado {
            // criando atributos
            private $primeNome;
            private $sobrenome;
            private $salMensal;

            // construtor inicializando os atributos
            public function __construct ($primeNome, $sobrenome, $salMensal) {
                $this->primeNome = $primeNome;
                $this->sobrenome = $sobrenome;
                //tratando a condição:  Se o salário mensal não for positivo, configure-o como 0.0.
                if($salMensal < 0) {
                    $this->salMensal = 0.0;
                } else {
                    $this->salMensal = $salMensal;
                }
            }

            // criando setters e getters
            
            public function setPrimeNome($primeNome) {
                $this->primeNome = $primeNome;        
            }
            public function getPrimeNome() {
                return $this->primeNome;        
            }

            public function setSobrenome($sobrenome) {
                $this->sobrenome = $sobrenome;        
            }
            public function getSobrenome() {
                return $this->sobrenome;        
            }

            public function setSalMensal($salMensal) {
                $this->salMensal = $salMensal;        
            }
            public function getSalMensal() {
                return $this->salMensal;        
            }

            // método calculando reajuste
            public function aumentaSalario() {
                $salAnual = $this->salMensal * 12;
                echo "O salário anual é de: R$ $salAnual" . "<br>";
                $salAnualReajustado = $salAnual + ($salAnual * 0.10);
                echo "Após reajusta de 10%, o salário anual será de: R$ $salAnualReajustado". "<br>";
            }
        }

        // Exemplo de uso da classe
        $empregado1 = new Empregado("João", "Silva", 2000);
        echo "Nome: " . $empregado1->getPrimeNome() . " " . $empregado1->getSobrenome() . "<br>";
        $empregado1->aumentaSalario();
        
        ?>
    </body>
</html>