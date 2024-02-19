<?php

declare(strict_types=1);

/* EXERCICE 6

Copiez les classes de l'exercice 2.

À FAIRE : changez les propriétés en privées.
À FAIRE : Créez un nom de barre const avec la valeur 'Het Vervolg'.
A FAIRE : Imprimez la constante à l'écran.
À FAIRE : Créez une fonction dans la boisson et utilisez la constante.
À FAIRE : Faites de même dans le cours de bière.
À FAIRE : Imprimez le résultat de ces fonctions à l'écran.
À FAIRE : Assurez-vous que chaque impression se trouve sur une nouvelle ligne.

Utilisez la dactylographie partout !
*/




class breveage {

    private $name;
    private $color;
    private $price;
    private $temperature;

    const bar = "Het Vervolg";

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

    public static function getNameBar(){
        return self::bar;
    }

    public function getInfo() {

        return $this->getName(). "This " . $this->getColor(). " breveage is ". $this-> getTemperature() ;

    }
    

}

$breveage1 = new breveage("Cola ", "Black ", 2);

$breveage1->getInfo();

class beer extends breveage{
    private $alcool;


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

    public static function getNameBar2(){
        return self::bar;
    }

    public function beerInfo(){
        return "Hello I'm new " . $this->getName() .  "and I have a color ". $this->getcolor();
        }

}

$beer1 = new beer("Duvel ","blond ",3.50,"Cold ", 8.5);

echo "welcome to " . breveage::getNameBar()."<br>";
echo "welcome to " . beer::getNameBar();