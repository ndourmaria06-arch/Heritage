<?php

namespace App\Core;

use DateTimeImmutable;

abstract class AbstractEntity
{
    protected int $id ;
    protected DateTimeImmutable $dateCreation;

    public function __construct($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(?int $id)
    {
        $this->id = $id;
    }

    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    public function setDateCreation(DateTimeImmutable $dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }
}