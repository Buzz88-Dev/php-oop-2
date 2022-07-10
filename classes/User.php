<?php 

class User 
{
    public $name;
    public $surname;
    public $email;
    public $login = false;

    public function __construct(string $nome, string $cognome, string $email, bool $login){
        $this->name = $nome;
        $this->surname = $cognome;
        $this->email = $email;
        $this->login = $login;
    }
}

?>