<?php

namespace ConnectionBDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Encargado
 */
class Encargado
{
    /**
     * @var integer
     */
    private $cedula;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $relacion;


    /**
     * Get cedula
     *
     * @return integer 
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Encargado
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set relacion
     *
     * @param string $relacion
     * @return Encargado
     */
    public function setRelacion($relacion)
    {
        $this->relacion = $relacion;
    
        return $this;
    }

    /**
     * Get relacion
     *
     * @return string 
     */
    public function getRelacion()
    {
        return $this->relacion;
    }
}
