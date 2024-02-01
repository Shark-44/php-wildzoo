<?php

namespace App\Animal;
use App\Flyable;

class flyBird extends Bird implements Flyable
{
    public function describeWings() {
        echo $this->name . " je suis un oiseau car j'ai des ailes\n";
    }
    public function fly(): string 
    {
        return 'Je vole  grace a mes ailes';
    }
}