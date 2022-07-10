<?php 

class CreditCard 
{
    public $credit_card_number;
    public $scadenza;
    public User $nome;
    public User $cognome;



    public function __construct(int $number, string $data_scadenza, User $name, User $surname){
        $this->credit_card_number = $number;
        $this->scadenza = $data_scadenza;
        $this->nome = $name;
        $this->cognome = $surname;
    }



    public function credit_card(){
            echo "</ul>
                    <li>Numero carta di credito: {$this->credit_card_number}</li>
                    <li>Scadenza: {$this->scadenza}</li>
                    <li>Nome: {$this->nome->name}</li>
                    <li>Cognome: {$this->cognome->surname}</li>
                    <li>Cognome: {$this->scadenza_creditcard()}</li>
                </ul>";
    }

    public function scadenza_creditcard(){
        $datadioggi = date('d-m-Y');
        $strto_data_oggi = strtotime($datadioggi);

        $datascadenza = $this->scadenza;
        $datascadenza_strtotime = strtotime($datascadenza);

        if ($strto_data_oggi > $datascadenza_strtotime) {
            return "La carta di credito è scaduta";
        } else  {
            return "Puoi pagare con la carta";
        }
    }
}


?>