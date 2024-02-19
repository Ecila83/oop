<?php

declare(strict_types=1);

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