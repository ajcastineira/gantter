<?php

namespace GanttBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Agencia
 *
 * @ORM\Table(name="agencia")
 * @ORM\Entity(repositoryClass="GanttBundle\Repository\AgenciaRepository")
 */
class Agencia
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="Programa", mappedBy="agencia")
     */
    private $programas;

    public function __construct() {
        $this->programas = new ArrayCollection();
    }


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
     * Set nombre
     *
     * @param string $nombre
     * @return Agencia
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
     * Add programas
     *
     * @param \GanttBundle\Entity\Programa $programas
     * @return Agencia
     */
    public function addPrograma(\GanttBundle\Entity\Programa $programas)
    {
        $this->programas[] = $programas;

        return $this;
    }

    /**
     * Remove programas
     *
     * @param \GanttBundle\Entity\Programa $programas
     */
    public function removePrograma(\GanttBundle\Entity\Programa $programas)
    {
        $this->programas->removeElement($programas);
    }

    /**
     * Get programas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProgramas()
    {
        return $this->programas;
    }
}
