<?php

declare(strict_types=1);

// À FAIRE : Créez une boisson de classe.
// TODO : Créer les propriétés couleur (string), prix (float) et température (string) et prévoir également une construction.
// À FAIRE : Avoir une valeur par défaut "froid" dans la construction pour la température.

// N'oubliez pas que pour l'instant, nous utiliserons des propriétés et des méthodes accessibles de partout.
// À FAIRE : Créez une fonction getInfo qui renvoie "Cette boisson est <température> et <couleur>."
// À FAIRE : Instanciez un objet qui représente le cola. Assurez-vous que la couleur est réglée sur noir, que le prix est égal à 2 euros et que la température est automatiquement froide.
//  imprimez le getInfo sur l'écran.
// À FAIRE : Imprimez la température sur l’écran.

// UTILISEZ LE TYPEHINTING PARTOUT !

class breveage {
    public $color;
    public $price;
    public $temperature;

    public function __construct(string $color, float $price, string $temperature = ("Cold")){

        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo() {

        echo "This  $this-> color breveage is, $this-> temperature ";

    }

};

$breveage1 = new breveage("Cola", "Black", 2);

$breveage1->getInfo();