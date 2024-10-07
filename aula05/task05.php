<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula05 - task05</title>
    </head>

    <body>
        <?php
            // classe Porta
            class Porta {
                protected $aberta;
                protected $cor;
                protected $dimensaoX;
                protected $dimensaoY;
                protected $dimensaoZ;

                // métodos void
                public function abrir() {
                    $this->aberta = true;
                }

                public function fechar() {
                    $this->aberta = false;
                }

                public function pintar($novacor) {
                    $this->cor = $novacor;
                }

                public function estaAberta() {
                    return $this->aberta;
                }

                // construtor porta
                public function __construct($dimensaoX, $dimensaoY, $dimensaoZ) {
                    $this->cor = 'vermelha';
                    $this->dimensaoX = $dimensaoX;
                    $this->dimensaoY = $dimensaoY;
                    $this->dimensaoZ = $dimensaoZ;
                    $this->aberta = false; // Inicia fechada
                }
                
            }

            // classe Imovel
            class Imovel {
                protected $cor;
                protected $portas = [];
                protected $totalDePortas = 0;
                
                // pintar imóvel
                public function pintar($novacor) {
                    $this->cor = $novacor;
                }

                // conta quantas portas estão abertas no imóvel
                public function quantasPortasEstaoAbertas() {
                    $portaAbertas = 0;
                    foreach ($this->portas as $porta) {
                        if ($porta->estaAberta()) {
                            $portaAbertas++;
                        }
                    }
                    return $portaAbertas;
                }

                // adiciona porta ao imóvel
                public function adicionaPorta(Porta $porta) {                             
                    $this->portas[] = $porta;
                    $this->totalDePortas++;
                }

                // retorna total de portas do imóvel
                public function getTotalDePortas() {
                    return $this->totalDePortas;
                }

                // retorna uma porta específica
                protected function getPorta($indice) {
                    return $this->portas[$indice] ?? null;
                }

                // método para abrir uma porta
                public function abrirPorta($indice) {
                    if (isset($this->portas[$indice])) {
                        $this->portas[$indice]->abrir();
                    }
                }
            }

            // classe Casa
            class Casa extends Imovel{
                // construtor para iniciar a casa com 3 portas
                public function __construct($cor, $numPortas = 3) {
                    $this->cor = $cor;
                    // adiciona três portas na construção da casa
                    for ($i = 0; $i < $numPortas; $i++) {
                        $this->adicionaPorta(new Porta(80, 200, 5));
                    }
                }

            }

            // Classe Edificio
            class Edificio extends Imovel {
                private $totalDeAndares = 0;

                public function adicionarAndar() {
                    $this->totalDeAndares++;
                }
                public function totalDeAndares() {
                    return $this->totalDeAndares;
                }
            }

            

            // testando as classes
            $casa = new Casa("azul");
            $casa->abrirPorta(0); // abre a primeira porta
            echo "Portas abertas na casa: " . $casa->quantasPortasEstaoAbertas() . "<br>"; // exibe o número de portas abertas
            $casa->abrirPorta(1); // abre a segunda porta
            echo "Portas abertas na casa: " . $casa->quantasPortasEstaoAbertas() . "<br>"; // exibe o número de portas abertas

            $edificio = new Edificio("branco");
            $edificio->adicionarAndar(); // adiciona um andar
            $edificio->adicionaPorta(new Porta(80, 200, 5)); // adiciona uma porta ao edifício
            $edificio->adicionaPorta(new Porta(80, 200, 5)); // adiciona uma porta ao edifício
            $edificio->adicionaPorta(new Porta(80, 200, 5)); // adiciona uma porta ao edifício
            $edificio->adicionaPorta(new Porta(80, 200, 5)); // adiciona uma porta ao edifício
            $edificio->abrirPorta(0); // abre a primeira porta do edifício
            $edificio->abrirPorta(3); // abre a quarta porta do edifício
            $edificio->abrirPorta(2); // abre a terceira porta do edifício
            $edificio->adicionarAndar(); // adiciona mais um andar ao edifício
            echo "<br>Total de andares no edifício: " . $edificio->totalDeAndares(); // exibe o total de andares
            echo "<br>Portas abertas no edifício: " . $edificio->quantasPortasEstaoAbertas(); // exibe o número de portas abertas
        ?>
    </body>
</html>