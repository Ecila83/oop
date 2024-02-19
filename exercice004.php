<?php

declare(strict_types=1);

/* EXERCICE 4

Copiez le code de l'exercice 3 ici et supprimez tout ce qui concerne le cola.

À FAIRE : Protégez toutes les propriétés.
À FAIRE : Faire fonctionner toutes les autres impressions sans erreur sans changer la classe de boisson.
À FAIRE : N'appelez pas les getters dans la classe enfant.

UTILISEZ LE TYPEHINTING PARTOUT !
*/

class breveage {
    protected $name;
    protected $color;
    protected $price;
    protected $temperature;

    public function __construct(string $name,string $color, float $price, string $temperature = ("Cold")){
        $this->name = $name;
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

    public function setColor(string $color):void{
         $this->color = $color;
    }

    public function getInfo() {

        return $this->name. "This " . $this->color. "breveage is ". $this-> temperature ;

    }

}





class beer extends breveage{
    protected $alcool;
    public function __construct(string $name, string $color, float $price, string $temperature, float $alcool){

        parent::__construct($name,$color, $price, $temperature);

        $this->alcool = $alcool;
    }
    public function getAlcool(){
        return $this->alcool;
    }

    public function getAlcoolPercentage(){
        return $this->getName(). "alcohol percentage ". $this->getAlcool()."%";
    }

    public function beerInfo(){
        return "Hello I'm new " . $this->getName() .  "and I have a color ". $this->getcolor();
        }

}



$beer1 = new beer("Duvel ","blond ",3.50,"Cold ", 8.5);

echo $beer1->getInfo()."<br>";
echo $beer1->getAlcoolPercentage()."<br>";

$beer1->setColor("light");
echo $beer1->beerInfo();



print_r($beer1);