<?php

namespace App\Animal;
use App\Flyable;
use App\Swimmable;

class flyandswimBird extends Bird implements Flyable, Swimmable
{
    public function describeWings() 
    {
        echo $this->name . " je suis un oiseau car j'ai des ailes\n";
    }
    public function fly(): string 
    {
        return 'Je vole  grace a mes ailes';
    }
    public function swim(): string 
    {
        return 'et je sais nager';
    }
}