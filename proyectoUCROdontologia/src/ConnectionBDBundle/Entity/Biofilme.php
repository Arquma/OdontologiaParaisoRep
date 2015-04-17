<?php

namespace ConnectionBDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Biofilme
 */
class Biofilme
{
    /**
     * @var integer
     */
    private $posicion;

    /**
     * @var boolean
     */
    private $placa;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var \ConnectionBDBundle\Entity\Diente
     */
    private $iddiente;


    /**
     * Get posicion
     *
     * @return integer 
     */
    public function getPosicion()
    {
        return $this->posicion;
    }

    /**
     * Set placa
     *
     * @param boolean $placa
     * @return Biofilme
     */
    public function setPlaca($placa)
    {
        $this->placa = $placa;
    
        return $this;
    }

    /**
     * Get placa
     *
     * @return boolean 
     */
    public function getPlaca()
    {
        return $this->placa;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Biofilme
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set iddiente
     *
     * @param \ConnectionBDBundle\Entity\Diente $iddiente
     * @return Biofilme
     */
    public function setIddiente(\ConnectionBDBundle\Entity\Diente $iddiente = null)
    {
        $this->iddiente = $iddiente;
    
        return $this;
    }

    /**
     * Get iddiente
     *
     * @return \ConnectionBDBundle\Entity\Diente 
     */
    public function getIddiente()
    {
        return $this->iddiente;
    }
}
