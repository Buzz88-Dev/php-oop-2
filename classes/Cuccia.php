<?php 

class Cuccia extends Product
{
    public $size;
    public $color;

    public function __construct(string $name_product, string $name_brand, int $price_product, int $quantita, string $animal, string $taglia, string $colore){
        parent::__construct($name_product, $name_brand, $price_product, $quantita, $animal);
        $this->size = $taglia;
        $this->color = $colore;
    }

    public function print_prodotto(){
        parent::print_prodotto();
        echo "        <li>Size: {$this->size}</li>
                      <li>Colore: {$this->color}</li>
                    </ul>";
    }

}


?>