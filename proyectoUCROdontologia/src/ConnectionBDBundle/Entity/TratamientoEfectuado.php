<?php

namespace ConnectionBDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TratamientoEfectuado
 */
class TratamientoEfectuado
{
    /**
     * @var integer
     */
    private $idtratamientoEfectuado;

    /**
     * @var string
     */
    private $pieza;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var \ConnectionBDBundle\Entity\Expediente
     */
    private $idexpediente;

    /**
     * @var \ConnectionBDBundle\Entity\TratamientoGeneral
     */
    private $idtratamiento;

    /**
     * @var \ConnectionBDBundle\Entity\Odontologo
     */
    private $cedulaodontologo;


    /**
     * Get idtratamientoEfectuado
     *
     * @return integer 
     */
    public function getIdtratamientoEfectuado()
    {
        return $this->idtratamientoEfectuado;
    }

    /**
     * Set pieza
     *
     * @param string $pieza
     * @return TratamientoEfectuado
     */
    public function setPieza($pieza)
    {
        $this->pieza = $pieza;
    
        return $this;
    }

    /**
     * Get pieza
     *
     * @return string 
     */
    public function getPieza()
    {
        return $this->pieza;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return TratamientoEfectuado
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return TratamientoEfectuado
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
     * Set idexpediente
     *
     * @param \ConnectionBDBundle\Entity\Expediente $idexpediente
     * @return TratamientoEfectuado
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

    /**
     * Set idtratamiento
     *
     * @param \ConnectionBDBundle\Entity\TratamientoGeneral $idtratamiento
     * @return TratamientoEfectuado
     */
    public function setIdtratamiento(\ConnectionBDBundle\Entity\TratamientoGeneral $idtratamiento = null)
    {
        $this->idtratamiento = $idtratamiento;
    
        return $this;
    }

    /**
     * Get idtratamiento
     *
     * @return \ConnectionBDBundle\Entity\TratamientoGeneral 
     */
    public function getIdtratamiento()
    {
        return $this->idtratamiento;
    }

    /**
     * Set cedulaodontologo
     *
     * @param \ConnectionBDBundle\Entity\Odontologo $cedulaodontologo
     * @return TratamientoEfectuado
     */
    public function setCedulaodontologo(\ConnectionBDBundle\Entity\Odontologo $cedulaodontologo = null)
    {
        $this->cedulaodontologo = $cedulaodontologo;
    
        return $this;
    }

    /**
     * Get cedulaodontologo
     *
     * @return \ConnectionBDBundle\Entity\Odontologo 
     */
    public function getCedulaodontologo()
    {
        return $this->cedulaodontologo;
    }
}
