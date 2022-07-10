<?php
class Carrello
{
    public $total;
    public User $user;
    public $totalprice;    

    public function __construct(float $total, User $user, float $totalprice)
    {
        $this->total = $total;
        $this->user = $user;
        $this->totalprice = $totalprice;
    }

    public function print_user(){
        echo   " </ul>
                    <li>Nome: {$this->user->name}</li>
                    <li>Prodotti comprati: {$this->total}</li>
                    <li>Total Price: {$this->totalprice} euro</li>
                    <p>Sei registrato: {$this->total()}</p>
                </ul>"
                ;
    }

    public function total(){
        if ($this->user->login == true){
            $prezzo_scontato = $this->totalprice - ($this->totalprice * 20 / 100);
            return "Hai il 20% di sconto, quindi paghi {$prezzo_scontato} euro invece di {$this->totalprice} euro";
        } else {
            return 'Non hai lo sconto';
        }
    }

}
