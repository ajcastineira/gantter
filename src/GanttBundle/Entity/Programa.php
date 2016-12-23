<?php

namespace GanttBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Programa
 *
 * @ORM\Table(name="programa")
 * @ORM\Entity(repositoryClass="GanttBundle\Repository\ProgramaRepository")
 */
class Programa
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
     * @ORM\ManyToOne(targetEntity="Agencia", inversedBy="programas")
     * @ORM\JoinColumn(name="agencia_id", referencedColumnName="id")
     */
    private $agencia;

    /**
     * @ORM\OneToMany(targetEntity="FondoLinea", mappedBy="programa")
     */
    private $fondoslineas;

    public function __construct() {
        $this->fondoslineas = new ArrayCollection();
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
     * @return Programa
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
     * Set agencia
     *
     * @param \GanttBundle\Entity\Agencia $agencia
     * @return Programa
     */
    public function setAgencia(\GanttBundle\Entity\Agencia $agencia = null)
    {
        $this->agencia = $agencia;

        return $this;
    }

    /**
     * Get agencia
     *
     * @return \GanttBundle\Entity\Agencia 
     */
    public function getAgencia()
    {
        return $this->agencia;
    }

    /**
     * Add fondoslineas
     *
     * @param \GanttBundle\Entity\FondoLinea $fondoslineas
     * @return Programa
     */
    public function addFondoslinea(\GanttBundle\Entity\FondoLinea $fondoslineas)
    {
        $this->fondoslineas[] = $fondoslineas;

        return $this;
    }

    /**
     * Remove fondoslineas
     *
     * @param \GanttBundle\Entity\FondoLinea $fondoslineas
     */
    public function removeFondoslinea(\GanttBundle\Entity\FondoLinea $fondoslineas)
    {
        $this->fondoslineas->removeElement($fondoslineas);
    }

    /**
     * Get fondoslineas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFondoslineas()
    {
        return $this->fondoslineas;
    }
}
