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
    private $id;

    /**
     * @var \ConnectionBDBundle\Entity\Paciente
     */
    private $idpaciente;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
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
