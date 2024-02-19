<?php

declare(strict_types=1);

/* EXERCICE 3
reen sur une nouvelle ligne.

À FAIRE : Copiez le code de l'exercice 2 ici et supprimez tout ce qui concerne le cola.
À FAIRE : Rendre toutes les propriétés privées.
À FAIRE : Faire fonctionner toutes les autres impressions sans erreur.
À FAIRE : Après avoir corrigé les erreurs. Changez la couleur de Duvel en clair au lieu de blond et imprimez également cette nouvelle couleur sur l'écran après toutes les autres choses déjà imprimées (pour être sûr que la couleur a changé).
À FAIRE : Créez une nouvelle méthode privée dans la classe Beer appelée beerInfo qui renvoie "Salut, je m'appelle Duvel et j'ai un pourcentage d'alcool de 8,5 et j'ai une couleur claire."

Assurez-vous d'utiliser les variables et pas seulement cette ligne de texte.

À FAIRE : Imprimez cette méthode sur le sc
UTILISEZ LE TYPEHINTING PARTOUT !
*/
class breveage {
    private $name;
    private $color;
    private $price;
    private $temperature;

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