<?php

declare(strict_types=1);

/* EXERCICE 2

À FAIRE : Faire de la bière de classe qui s'étend de la boisson.
À FAIRE : Créez le nom des propriétés (chaîne) et le pourcentage d'alcool (float).
À FAIRE : Prévoir une construction qui nous permet d'utiliser toutes les propriétés de la boisson et qui définit les valeurs du nom et du pourcentage d'alcool.

N'oubliez pas que pour l'instant, nous utiliserons des propriétés et des méthodes accessibles de partout.
À FAIRE : Créez une fonction getAlcoholPercentage qui renvoie l'alocoholPercentage.
À FAIRE : Instancier un objet qui représente Duvel. Assurez-vous que la couleur est réglée sur blond, que le prix est égal à 3,5 euros et que la température est automatiquement froide.
À FAIRE : Aussi le nom égal à Duvel et le pourcentage d'alcool à 8,5%
À FAIRE : Imprimez le getAlcoholPercentage 2 fois sur l'écran de deux manières différentes, imprimez la couleur à l'écran et le getInfo.

Assurez-vous que chaque impression se trouve sur une ligne différente.
Essayez d'obtenir cette erreur à l'écran = Erreur fatale : Erreur non détectée : Appel à la méthode non définie Beverage::getAlcoholPercentage() dans /var/www/becode/workshop/exercise2.php à la ligne 64
UTILISEZ LE TYPEHINTING PARTOUT !
*/
class breveage {
    public $name;
    public $color;
    public $price;
    public $temperature;

    public function __construct(string $name,string $color, float $price, string $temperature = ("Cold")){
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo() {

        echo $this->name. "This " . $this-> color. "breveage is ". $this-> temperature ;

    }

}

$breveage1 = new breveage("Cola ", "Black ", 2);

$breveage1->getInfo();

class beer extends breveage{
    public $alcool;
    public function __construct(string $name, string $color, float $price, string $temperature, float $alcool){

        parent::__construct($name,$color, $price, $temperature);

        $this->alcool = $alcool;
    }

    public function getAlcoolPercentage(){
        echo $this->name. "alcohol percentage ". $this->alcool."%";
    }

}

$beer1 = new beer("Duvel ","blond ",3.50,"Cold ", 8.5);

$beer1->getInfo()."<br>";
$beer1->getAlcoolPercentage()."<br>";
print_r($beer1);

