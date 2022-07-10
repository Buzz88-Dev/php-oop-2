<?php 

class Food extends Product
{
    public $weight_grams;

    public function __construct(string $name_product, string $name_brand, int $price_product, int $quantita, string $animal, int $weight){
        parent::__construct($name_product, $name_brand, $price_product, $quantita, $animal);
        $this->weight_grams = $weight;
    }


    public function print_prodotto(){
        parent::print_prodotto();
        echo "        <li>Peso: {$this->weight_grams} grammi</li>
                    </ul>";
    }
}

?>