<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula05 - task01</title>
    </head>

    <body>
        <?php
        // criando a classe invoice para representar uma venda
        class Invoice {
            // criando atributos
            private $codItem;
            private $dscItem;
            private $qtdItem;
            private $vlrItem;

            // construtor inicializando os atributos
            public function __construct ($codItem, $dscItem, $qtdItem, $vlrItem) {
                $this->codItem = $codItem;
                $this->dscItem = $dscItem;
                /*
                tratando a condição: Se a quantidade não for positiva,
                ela deve ser configurada como 0.
                */
                if($qtdItem < 0) {
                    $this->qtdItem = 0;
                } else {
                        $this->qtdItem = $qtdItem;
                    }
                /*
                tratando a condição:  Se o preço por item não for positivo, 
                ele deve ser configurada como 0.0.
                */
                if($vlrItem < 0) {
                    $this->vlrItem = 0.0;
                } else {
                    $this->vlrItem = $vlrItem;
                }
            }

            // criando setters e getters
            
            public function setCodItem($codItem) {
                $this->codItem = $codItem;        
            }
            public function getCodItem() {
                return $this->codItem;        
            }

            public function setdscItem($dscItem) {
                $this->dscItem = $dscItem;        
            }
            public function getdscItem() {
                return $this->dscItem;        
            }

            public function setqtdItem($qtdItem) {
                $this->qtdItem = $qtdItem;        
            }
            public function getqtdItem() {
                return $this->qtdItem;        
            }

            public function setCvlrItem($vlrItem) {
                $this->vlrItem = $vlrItem;        
            }
            public function getvlrItem() {
                return $this->vlrItem;        
            }

            // método calculando o valor da fatura
            public function getInvoiceAmount() {
                return $this->qtdItem * $this->vlrItem;
            }
        }

        // impressão teste para validação
        $invoice = new Invoice(1, "Mouse", 2, 50.00);
        echo "Valor da Fatura: R$ " . $invoice->getInvoiceAmount();
        ?>
    </body>
</html>