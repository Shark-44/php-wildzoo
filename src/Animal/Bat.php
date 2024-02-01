<?php

namespace App\Animal;
use App\Flyable;

final class Bat extends Mammal implements Flyable
{
    private $pawNumber = 2;

    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
    public function getPawNumber(): int
    {
        return $this->pawNumber;
    }
    public function fly(): string 
    {
        return 'Je vole  grace a mes ailes';
    }
}