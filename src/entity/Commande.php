<?php

namespace App\Entity;

use App\Core\AbstractEntity;

class Commande extends AbstractEntity
{
    private $prixFinal;
    private $reductionAppliquee;

    public function __construct( $prixFinal, $reductionAppliquee)
    {
        $this->prixFinal = $prixFinal;
        $this->reductionAppliquee = $reductionAppliquee;
    }

    public function getPrixFinal(): float
    {
        return $this->prixFinal;
    }

    public function setPrixFinal(float $prixFinal): self
    {
        $this->prixFinal = $prixFinal;
    }

    public function getReductionAppliquee()
    {
        return $this->reductionAppliquee;
    }

    public function setReductionAppliquee(bool $reductionAppliquee)
    {
        $this->reductionAppliquee = $reductionAppliquee;
        
    }
}