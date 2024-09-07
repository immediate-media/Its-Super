<?php

namespace App\Abstract;

abstract class AbstractSuperHero
{
    protected string $superPower;
    protected string|array $battleCry;
    protected string $powerLevel;
    protected string $universe;
    protected string $name;

    public function getSuperpower(): string
    {
        return $this->superPower;
    }

    public function getBattleCry(): string
    {
        return $this->battleCry;
    }

    public function getPowerLevel(): string
    {
        return $this->powerLevel;
    }

    public function getUniverse(): string
    {
        return $this->universe;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCharacterSheet(): array
    {
        return [
            'Hero' => $this->getName(),
            'Universe' => $this->getUniverse(),
            'Power' => $this->getSuperpower(),
            'BattleCry' => $this->getBattleCry(),
            'Power Level' => $this->getPowerLevel(),
        ];
    }

}