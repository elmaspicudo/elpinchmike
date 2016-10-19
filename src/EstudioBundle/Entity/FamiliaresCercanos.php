<?php

namespace EstudioBundle\Entity;

/**
 * FamiliaresCercanos
 */
class FamiliaresCercanos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $edad;

    /**
     * @var string
     */
    private $parentesco;

    /**
     * @var string
     */
    private $estadoCivil;

    /**
     * @var string
     */
    private $escolaridad;

    /**
     * @var string
     */
    private $ocupacion;


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
     *
     * @return FamiliaresCercanos
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
     * Set edad
     *
     * @param integer $edad
     *
     * @return FamiliaresCercanos
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return integer
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set parentesco
     *
     * @param string $parentesco
     *
     * @return FamiliaresCercanos
     */
    public function setParentesco($parentesco)
    {
        $this->parentesco = $parentesco;

        return $this;
    }

    /**
     * Get parentesco
     *
     * @return string
     */
    public function getParentesco()
    {
        return $this->parentesco;
    }

    /**
     * Set estadoCivil
     *
     * @param string $estadoCivil
     *
     * @return FamiliaresCercanos
     */
    public function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;

        return $this;
    }

    /**
     * Get estadoCivil
     *
     * @return string
     */
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    /**
     * Set escolaridad
     *
     * @param string $escolaridad
     *
     * @return FamiliaresCercanos
     */
    public function setEscolaridad($escolaridad)
    {
        $this->escolaridad = $escolaridad;

        return $this;
    }

    /**
     * Get escolaridad
     *
     * @return string
     */
    public function getEscolaridad()
    {
        return $this->escolaridad;
    }

    /**
     * Set ocupacion
     *
     * @param string $ocupacion
     *
     * @return FamiliaresCercanos
     */
    public function setOcupacion($ocupacion)
    {
        $this->ocupacion = $ocupacion;

        return $this;
    }

    /**
     * Get ocupacion
     *
     * @return string
     */
    public function getOcupacion()
    {
        return $this->ocupacion;
    }
}
