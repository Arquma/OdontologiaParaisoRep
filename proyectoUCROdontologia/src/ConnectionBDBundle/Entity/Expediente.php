<?php

namespace ConnectionBDBundle\Entity;

use ConnectionBDBundle\Entity\Paciente;

use Doctrine\ORM\Mapping as ORM;

/**KATHERINE
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
    ///
    public function __toString() {
        $paciente = $this->idpaciente;
       //return $this->getId()."";
       return $this->Buscar($paciente);
    }

    public function Buscar($id) {
        $conn= new mysqli('163.178.107.130','adm','saucr.092','u-dental','3306');
        $sql = "SELECT nombre,cedula FROM paciente WHERE id LIKE '%" . $id . "%'";
        $sentencia= $conn->query($sql);
        
        if (!$sentencia) {
            echo 'Could not run query: ' . mysql_error();
        } //if
        $resultado = mysql_fetch_assoc($sentencia);
        $nombre = $resultado['nombre'];
        $cedula = $resultado['cedula'];
        printf($nombre);

        
        
        
//        $em = $this->getDoctrine()->getManager();
//        $entity = $em->getRepository('ConnectionBDBundle:Paciente')->find($id);
//        // >getNombre(). " ".$this->getCedula();
        return $nombre;
    }

}
