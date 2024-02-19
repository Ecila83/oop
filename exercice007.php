<?php

declare(strict_types=1);

/* EXERCICE 7

Copiez votre solution de l'exercice 6

À FAIRE : Créez une propriété statique dans la classe Boisson accessible uniquement depuis l'intérieur de la classe appelée adresse qui a la valeur "Melkmarkt 9, 2000 Anvers".
A FAIRE : Imprimer l'adresse sans créer un nouvel instant de la classe de boisson 2 fois de deux manières différentes.

Utilisez la dactylographie partout !
*/

class breveage {

    private $name;
    private $color;
    private $price;
    private $temperature;
    protected static $adresse = "Melkmarkt 9, 2000 Anvers";

    const bar = "Het Vervolg";

    public function __construct(string $name, string $color, float $price, string $temperature = "Cold") {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getColor() {
        return $this->color;
    }
    
    public function getPrice() {
        return $this->price;
    }
    
    public function getTemperature() {
        return $this->temperature;
    }

    public static function getNameBar() {
        return self::bar;
    }
    public static function getAdress(){
        return self::$adresse;
    }

    public function getInfo() {
        return $this->getName() . " is a " . $this->getColor() . " beverage and it is ". $this->getTemperature() . ".";
    }
}

class adress extends breveage{
public static function printAdress(){
    echo parent::$adresse;
}
}

$beverage1 = new breveage("Cola", "Black", 2);
echo $beverage1->getInfo() . "<br>";
echo "The address is: " . breveage::getAdress() . "<br>";

$beverage2 = new breveage("Pepsi", "Brown", 2.5, "Ice Cold");

adress::printAdress();
