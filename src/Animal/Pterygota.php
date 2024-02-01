<?php

namespace App\Animal;
use App\Flyable;

final class Pterygota extends Insect implements Flyable
{
    public function describeWings() {
        echo $this->name . "Je suis un insect mais j'ai des ailes\n";
    }
    public function fly(): string 
    {
        return 'Je vole  grace a mes ailes';
    }
    
}