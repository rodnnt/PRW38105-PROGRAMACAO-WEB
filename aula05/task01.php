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
    
    public function setCodItem() {
        $this->codItem;        
    }
    public function getCodItem() {
        return $this->codItem;        
    }

    public function setdscItem() {
        $this->dscItem;        
    }
    public function getdscItem() {
        return $this->dscItem;        
    }

    public function setqtdItem() {
        $this->qtdItem;        
    }
    public function getqtdItem() {
        return $this->qtdItem;        
    }

    public function setCvlrItem() {
        $this->vlrItem;        
    }
    public function getvlrItem() {
        return $this->vlrItem;        
    }

    // método calculando o valor da fatura
    public function getInvoiceAmount() {
        return $this->qtdItem * $this->vlrItem;
    }
}
?>