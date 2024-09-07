<?php

declare(strict_types=1);

namespace App\Hero;

use App\Abstract\AbstractSuperHero;

class IronMan extends AbstractSuperHero
{
    protected string $name = 'IronMan';
    protected string $universe = 'Marvel';
    protected string $powerLevel = 'medium';
    protected string $superPower = 'Super intelligence';
    protected string|array $battleCry = 'I am IronMan';
}