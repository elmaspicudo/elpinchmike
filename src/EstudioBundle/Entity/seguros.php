<?php

namespace EstudioBundle\Entity;

/**
 * seguros
 */
class seguros
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $aseguradora;

    /**
     * @var string
     */
    private $tipoSeguro;

    /**
     * @var float
     */
    private $mensualidad;

    /**
     * @var \DateTime
     */
    private $vigencia;


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
     * Set aseguradora
     *
     * @param string $aseguradora
     *
     * @return seguros
     */
    public function setAseguradora($aseguradora)
    {
        $this->aseguradora = $aseguradora;

        return $this;
    }

    /**
     * Get aseguradora
     *
     * @return string
     */
    public function getAseguradora()
    {
        return $this->aseguradora;
    }

    /**
     * Set tipoSeguro
     *
     * @param string $tipoSeguro
     *
     * @return seguros
     */
    public function setTipoSeguro($tipoSeguro)
    {
        $this->tipoSeguro = $tipoSeguro;

        return $this;
    }

    /**
     * Get tipoSeguro
     *
     * @return string
     */
    public function getTipoSeguro()
    {
        return $this->tipoSeguro;
    }

    /**
     * Set mensualidad
     *
     * @param float $mensualidad
     *
     * @return seguros
     */
    public function setMensualidad($mensualidad)
    {
        $this->mensualidad = $mensualidad;

        return $this;
    }

    /**
     * Get mensualidad
     *
     * @return float
     */
    public function getMensualidad()
    {
        return $this->mensualidad;
    }

    /**
     * Set vigencia
     *
     * @param \DateTime $vigencia
     *
     * @return seguros
     */
    public function setVigencia($vigencia)
    {
        $this->vigencia = $vigencia;

        return $this;
    }

    /**
     * Get vigencia
     *
     * @return \DateTime
     */
    public function getVigencia()
    {
        return $this->vigencia;
    }
}

