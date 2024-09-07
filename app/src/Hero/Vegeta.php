<?php

declare(strict_types=1);

namespace App\Hero;

use App\Abstract\AbstractSuperHero;

class Vegeta extends AbstractSuperHero
{
    protected string $name = 'Vegeta';
    protected string $universe = 'Dragon Ball Z';
    protected string $powerLevel = 'high';
    protected string $superPower = 'Super Saiyan';
    protected string|array $battleCry = [
        'Final Flash!',
        'Big Bang Attack!',
        'Galick Gun!',
        'It\'s over 9000!',
        'I am the prince of all Saiyans!'
    ];

    public function getBattleCry(): string
    {
        return $this->battleCry[array_rand($this->battleCry)];
    }
}