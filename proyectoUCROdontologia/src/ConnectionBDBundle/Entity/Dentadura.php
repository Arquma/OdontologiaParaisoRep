<?php

namespace ConnectionBDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dentadura
 */
class Dentadura
{
    /**
     * @var integer
     */
    private $iddentandura;

    /**
     * @var integer
     */
    private $dientesPresentes;

    /**
     * @var \ConnectionBDBundle\Entity\Expediente
     */
    private $idexpediente;


    /**
     * Get iddentandura
     *
     * @return integer 
     */
    public function getIddentandura()
    {
        return $this->iddentandura;
    }

    /**
     * Set dientesPresentes
     *
     * @param integer $dientesPresentes
     * @return Dentadura
     */
    public function setDientesPresentes($dientesPresentes)
    {
        $this->dientesPresentes = $dientesPresentes;
    
        return $this;
    }

    /**
     * Get dientesPresentes
     *
     * @return integer 
     */
    public function getDientesPresentes()
    {
        return $this->dientesPresentes;
    }

    /**
     * Set idexpediente
     *
     * @param \ConnectionBDBundle\Entity\Expediente $idexpediente
     * @return Dentadura
     */
    public function setIdexpediente(\ConnectionBDBundle\Entity\Expediente $idexpediente = null)
    {
        $this->idexpediente = $idexpediente;
    
        return $this;
    }

    /**
     * Get idexpediente
     *
     * @return \ConnectionBDBundle\Entity\Expediente 
     */
    public function getIdexpediente()
    {
        return $this->idexpediente;
    }
}
