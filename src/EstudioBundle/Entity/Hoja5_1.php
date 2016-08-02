<?php

namespace EstudioBundle\Entity;

/**
 * Hoja5_1
 */
class Hoja5_1
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $investigado;

    /**
     * @var float
     */
    private $conyuge;

    /**
     * @var float
     */
    private $padres;

    /**
     * @var float
     */
    private $hermanos;

    /**
     * @var float
     */
    private $otros;


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
     * Set investigado
     *
     * @param float $investigado
     *
     * @return Hoja5_1
     */
    public function setInvestigado($investigado)
    {
        $this->investigado = $investigado;

        return $this;
    }

    /**
     * Get investigado
     *
     * @return float
     */
    public function getInvestigado()
    {
        return $this->investigado;
    }

    /**
     * Set conyuge
     *
     * @param float $conyuge
     *
     * @return Hoja5_1
     */
    public function setConyuge($conyuge)
    {
        $this->conyuge = $conyuge;

        return $this;
    }

    /**
     * Get conyuge
     *
     * @return float
     */
    public function getConyuge()
    {
        return $this->conyuge;
    }

    /**
     * Set padres
     *
     * @param float $padres
     *
     * @return Hoja5_1
     */
    public function setPadres($padres)
    {
        $this->padres = $padres;

        return $this;
    }

    /**
     * Get padres
     *
     * @return float
     */
    public function getPadres()
    {
        return $this->padres;
    }

    /**
     * Set hermanos
     *
     * @param float $hermanos
     *
     * @return Hoja5_1
     */
    public function setHermanos($hermanos)
    {
        $this->hermanos = $hermanos;

        return $this;
    }

    /**
     * Get hermanos
     *
     * @return float
     */
    public function getHermanos()
    {
        return $this->hermanos;
    }

    /**
     * Set otros
     *
     * @param float $otros
     *
     * @return Hoja5_1
     */
    public function setOtros($otros)
    {
        $this->otros = $otros;

        return $this;
    }

    /**
     * Get otros
     *
     * @return float
     */
    public function getOtros()
    {
        return $this->otros;
    }
}