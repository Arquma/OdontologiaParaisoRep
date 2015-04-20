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
     * @var \ConnectionBDBundle\Entity\Paciente
     */
    private $idpaciente;


    /**
     * Get idexpediente
     *
     * @return integer 
     */
    public function getIdexpediente()
    {
        return $this->idexpediente;
    }

    /**
     * Set idpaciente
     *
     * @param \ConnectionBDBundle\Entity\Paciente $idpaciente
     * @return Expediente
     */
    public function setIdpaciente(\ConnectionBDBundle\Entity\Paciente $idpaciente = null)
    {
        $this->idpaciente = $idpaciente;
    
        return $this;
    }

    /**
     * Get idpaciente
     *
     * @return \ConnectionBDBundle\Entity\Paciente 
     */
    public function getIdpaciente()
    {
        return $this->idpaciente;
    }
}
