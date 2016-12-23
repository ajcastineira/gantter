<?php

namespace GanttBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * FondoLinea
 *
 * @ORM\Table(name="fondo_linea")
 * @ORM\Entity(repositoryClass="GanttBundle\Repository\FondoLineaRepository")
 */
class FondoLinea
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
     * @ORM\ManyToOne(targetEntity="Programa", inversedBy="fondoslineas")
     * @ORM\JoinColumn(name="programa_id", referencedColumnName="id")
     */
    private $programa;

    /**
     * @ORM\OneToMany(targetEntity="Concurso", mappedBy="fondolinea")
     */
    private $concursos;

    public function __construct() {
        $this->concursos = new ArrayCollection();
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
     * @return FondoLinea
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
     * Set programa
     *
     * @param \GanttBundle\Entity\Programa $programa
     * @return FondoLinea
     */
    public function setPrograma(\GanttBundle\Entity\Programa $programa = null)
    {
        $this->programa = $programa;

        return $this;
    }

    /**
     * Get programa
     *
     * @return \GanttBundle\Entity\Programa 
     */
    public function getPrograma()
    {
        return $this->programa;
    }

    /**
     * Add concursos
     *
     * @param \GanttBundle\Entity\Concurso $concursos
     * @return FondoLinea
     */
    public function addConcurso(\GanttBundle\Entity\Concurso $concursos)
    {
        $this->concursos[] = $concursos;

        return $this;
    }

    /**
     * Remove concursos
     *
     * @param \GanttBundle\Entity\Concurso $concursos
     */
    public function removeConcurso(\GanttBundle\Entity\Concurso $concursos)
    {
        $this->concursos->removeElement($concursos);
    }

    /**
     * Get concursos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConcursos()
    {
        return $this->concursos;
    }
}
