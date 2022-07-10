<?php 

    class Product 
    {
        public $name;
        public $brand;
        public $price;
        public $quantity;
        public $animal_product;


        public function __construct(string $name_product, string $name_brand, int $price_product, int $quantita, string $animal)
        {
            $this->name = $name_product;
            $this->brand = $name_brand;
            $this->price = $price_product;
            $this->quantity = $quantita;
            $this->animal_product = $animal;
        }


        public function print_prodotto(){
            echo    " <h4>Prodotto: {$this->name}</h4>
					  <ul>
						    <li>Brand: {$this->brand}</li>
						    <li>Price: {$this->price} euro</li>
                            <li>Quantita: {$this->quantity}</li>
						    <li>Animale: {$this->animal_product}</li>"
                    ;
        }
    }

?>