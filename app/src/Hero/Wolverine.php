<?php

declare(strict_types=1);

namespace App\Hero;

use App\Abstract\AbstractSuperHero;

class Wolverine extends AbstractSuperHero
{
    protected string $name = 'Wolverine';
    protected string $universe = 'Marvel';
    protected string $powerLevel = 'high';
    protected string $superPower = 'Regeneration';
    protected string|array $battleCry = 'I\'m the best there is at what I do';
}