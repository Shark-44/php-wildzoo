<?php

namespace App\Animal;
use App\Swimmable;

class SwimmingBird extends Bird implements Swimmable
{
    public function describeWings() {
        echo $this->name . " je suis un oiseau car j'ai des ailes\n";
    }
    public function swim(): string 
    {
        return 'Je ne vole pas mais je sais nager';
    }
}