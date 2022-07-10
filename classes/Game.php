<?php 

class Game extends Product
{
    public $color;

    public function __construct(string $name_product, string $name_brand, int $price_product, int $quantita, string $animal, string $colore){
        parent::__construct($name_product, $name_brand, $price_product, $quantita, $animal);
        $this->color = $colore;
    }


    public function print_prodotto(){
        parent::print_prodotto();
        echo "        <li>Colore: {$this->color}</li>
                    </ul>";
    }
}

?>