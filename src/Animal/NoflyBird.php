<?php

namespace App\Animal;


class Noflybird extends Bird 
{
    public function describeWings() 
    {
        echo $this->name . " je suis un oiseau car j'ai des ailes\n";
    }
}