<?php

namespace ConnectionBDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DienteMatriz
 */
class DienteMatriz
{
    /**
     * @var integer
     */
    private $iddienteMatriz;

    /**
     * @var integer
     */
    private $cara;

    /**
     * @var integer
     */
    private $posicion;

    /**
     * @var integer
     */
    private $color;

    /**
     * @var \ConnectionBDBundle\Entity\Diente
     */
    private $iddiente;


    /**
     * Get iddienteMatriz
     *
     * @return integer 
     */
    public function getIddienteMatriz()
    {
        return $this->iddienteMatriz;
    }

    /**
     * Set cara
     *
     * @param integer $cara
     * @return DienteMatriz
     */
    public function setCara($cara)
    {
        $this->cara = $cara;
    
        return $this;
    }

    /**
     * Get cara
     *
     * @return integer 
     */
    public function getCara()
    {
        return $this->cara;
    }

    /**
     * Set posicion
     *
     * @param integer $posicion
     * @return DienteMatriz
     */
    public function setPosicion($posicion)
    {
        $this->posicion = $posicion;
    
        return $this;
    }

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
     * Set color
     *
     * @param integer $color
     * @return DienteMatriz
     */
    public function setColor($color)
    {
        $this->color = $color;
    
        return $this;
    }

    /**
     * Get color
     *
     * @return integer 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set iddiente
     *
     * @param \ConnectionBDBundle\Entity\Diente $iddiente
     * @return DienteMatriz
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
