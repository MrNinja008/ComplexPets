<?php

namespace OguzhanUmutlu\ComplexPets\entities\types;

use OguzhanUmutlu\ComplexPets\entities\PetEntity;

class DogPet extends PetEntity {
    public const NETWORK_ID = self::WOLF;
    public $width = 0.5;
    public $height = 0.5;

    protected function initEntity(): void {
        $this->setTamed();
        parent::initEntity();
    }

    public function getName(): string {
        return "DogPet";
    }
}