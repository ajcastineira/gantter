<?php

namespace GanttBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Concurso
 *
 * @ORM\Table(name="concurso")
 * @ORM\Entity(repositoryClass="GanttBundle\Repository\ConcursoRepository")
 */
class Concurso
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="datetimetz")
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_final", type="datetime")
     */
    private $fechaFinal;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=7)
     */
    private $color;

    /**
     * @ORM\ManyToOne(targetEntity="FondoLinea", inversedBy="concursos")
     * @ORM\JoinColumn(name="fondolinea_id", referencedColumnName="id")
     */
    private $fondolinea;


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
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Concurso
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFinal
     *
     * @param \DateTime $fechaFinal
     * @return Concurso
     */
    public function setFechaFinal($fechaFinal)
    {
        $this->fechaFinal = $fechaFinal;

        return $this;
    }

    /**
     * Get fechaFinal
     *
     * @return \DateTime 
     */
    public function getFechaFinal()
    {
        return $this->fechaFinal;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Concurso
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
     * Set link
     *
     * @param string $link
     * @return Concurso
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Concurso
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
     * Set color
     *
     * @param string $color
     * @return Concurso
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set fondolinea
     *
     * @param \GanttBundle\Entity\FondoLinea $fondolinea
     * @return Concurso
     */
    public function setFondolinea(\GanttBundle\Entity\FondoLinea $fondolinea = null)
    {
        $this->fondolinea = $fondolinea;

        return $this;
    }

    /**
     * Get fondolinea
     *
     * @return \GanttBundle\Entity\FondoLinea 
     */
    public function getFondolinea()
    {
        return $this->fondolinea;
    }
}
