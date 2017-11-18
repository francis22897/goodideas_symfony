<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="idea")
 */
class Idea
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $titulo;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $descripcion;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $autor;

    /**
     * @ORM\Column(type="date")
     *
     * @var \DateTime
     */
    private $fechaPropuesta;

    /// Getters y Setters

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param string $titulo
     * @return Idea
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param string $descripcion
     * @return Idea
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    /**
     * @return string
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @param string $autor
     * @return Idea
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFechaPropuesta()
    {
        return $this->fechaPropuesta;
    }

    /**
     * @param \DateTime $fechaPropuesta
     * @return Idea
     */
    public function setFechaPropuesta($fechaPropuesta)
    {
        $this->fechaPropuesta = $fechaPropuesta;
        return $this;
    }
}