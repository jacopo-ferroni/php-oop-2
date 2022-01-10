<!-- Oggi pomeriggio provate ad immaginare alcune classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti. -->

<?php

class User {
    public $name;
    public $surname;
    protected $age;
    protected $timeSub;
    public $scount=10;

    public function __construct($name, $surname, $age, $timeSub) {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->timeSub = $timeSub;
        $this->getScount();
    }

    public function getScount() {
        if($this->age < 30 && $this->timeSub < 5) {
            $this->scount = 0;
        }
    }
}

$client = new User('Jacopo', 'Ferroni', 31, 9);
var_dump($client);
echo "Hai diritto a uno sconto di: {$client->scount}%";
echo '<br>';

class proUser extends User {
    public function getScount() {
        if($this->age > 30 && $this->timeSub > 5) {
            $this->scount = 50;
        }
    }
}

$client2 = new proUser('Paola', 'Cardone', 67, 9);
echo "Hai diritto a uno sconto di: {$client2->scount}%";
