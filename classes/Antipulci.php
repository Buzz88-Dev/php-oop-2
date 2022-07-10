<?php 

class Antipulci extends Product
{
    public $month;

    public function __construct(string $name_product, string $name_brand, int $price_product, int $quantita, string $animal, string $mese){
        parent::__construct($name_product, $name_brand, $price_product, $quantita, $animal);
        $this->month = $mese;
    }


    public function print_prodotto(){
        parent::print_prodotto();
        echo "        <li>Mese: {$this->month}</li>
                      <li>Vendita: {$this->vendita()}</li>
                    </ul>";
    }

    public function vendita(){
        $mese = $this->month;

        if ($mese == '05' || $mese ==  '06' || $mese == '07' || $mese == '08'){
            return "Il prodotto è in vendita";
        } else {
            return "Fuori stagione";
        }
    }
}

?>