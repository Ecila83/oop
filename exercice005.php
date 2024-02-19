<?php

declare(strict_types=1);

/* EXERCICE 5

Recopiez le cours de l'exercice 1.

À FAIRE : changez les propriétés en privées.
À FAIRE : Corrigez les erreurs sans utiliser les fonctions getter et setter.
A FAIRE : Changez le prix à 3,5 euros et imprimez-le également à l'écran sur une nouvelle ligne.
*/

class breveage {
    private $name;
    private $color;
    private $price;
    private $temperature;

    public function __construct(string $name,string $color, float $price, string $temperature = ("Cold")){

        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    
    public function getName(){
        return $this->name;
    }
    public function getColor(){
        return $this->color;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getTemperature(){
        return $this->temperature;
    }
    public function setPrice(float $price):void{
        $this->price = $price;

    }
    public function getInfo() {

        return $this->name. "This " . $this->color. " breveage is ". $this-> temperature ;

    }
    

};

$breveage1 = new breveage("Cola", "Black", 2);

$breveage1->getInfo();
$breveage1->setPrice(3.50);
echo $breveage1->getInfo();
