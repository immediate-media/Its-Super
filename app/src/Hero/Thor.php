<?php

declare(strict_types=1);

namespace App\Hero;

use App\Abstract\AbstractSuperHero;

class Thor extends AbstractSuperHero
{
    protected string $name = 'Thor';
    protected string $universe = 'Marvel';
    protected string $powerLevel = 'high';
    protected string $superPower = 'God of Thunder';
    protected string|array $battleCry = 'For Asgard!';
}