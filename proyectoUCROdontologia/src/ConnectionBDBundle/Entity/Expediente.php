<?php

namespace ConnectionBDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Expediente
 */
class Expediente
{
    /**
     * @var integer
     */
    private $idexpediente;


    /**
     * Get idexpediente
     *
     * @return integer 
     */
    public function getIdexpediente()
    {
        return $this->idexpediente;
    }
}
