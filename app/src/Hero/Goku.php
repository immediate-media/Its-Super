<?php

declare(strict_types=1);

namespace App\Hero;

use App\Abstract\AbstractSuperHero;

class Goku extends AbstractSuperHero
{
    protected string $name = 'Goku';
    protected string $universe = 'Dragon Ball Z';
    protected string $powerLevel = 'high';
    protected string $superPower = 'Super Saiyan';
    protected string|array $battleCry = 'Kamehameha!';

}