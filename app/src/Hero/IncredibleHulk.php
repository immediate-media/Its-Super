<?php

declare(strict_types=1);

namespace App\Hero;

use App\Abstract\AbstractSuperHero;

class IncredibleHulk extends AbstractSuperHero
{
    protected string $name = 'IncredibleHulk';
    protected string $universe = 'Marvel';
    protected string $powerLevel = 'high';
    protected string $superPower = 'Super strength';
    protected string|array $battleCry = 'HULK SMASH!';
}