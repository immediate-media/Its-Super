<?php

declare(strict_types=1);

namespace App\Hero;

use App\Abstract\AbstractSuperHero;

class SpiderMan extends AbstractSuperHero
{
    protected string $name = 'SpiderMan';
    protected string $universe = 'Marvel';
    protected string $powerLevel = 'medium';
    protected string $superPower = 'Spider sense';
    protected string|array $battleCry = 'With great power comes great responsibility';
}