<?php

namespace EstudioBundle\Entity;

/**
 * ReferenciaPatroimonialAutos
 */
class ReferenciaPatroimonialAutos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $marca;

    /**
     * @var string
     */
    private $modelo;

    /**
     * @var float
     */
    private $valorEstimado;

    /**
     * @var boolean
     */
    private $liquidado;


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
     * Set marca
     *
     * @param string $marca
     *
     * @return ReferenciaPatroimonialAutos
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     *
     * @return ReferenciaPatroimonialAutos
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return string
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set valorEstimado
     *
     * @param float $valorEstimado
     *
     * @return ReferenciaPatroimonialAutos
     */
    public function setValorEstimado($valorEstimado)
    {
        $this->valorEstimado = $valorEstimado;

        return $this;
    }

    /**
     * Get valorEstimado
     *
     * @return float
     */
    public function getValorEstimado()
    {
        return $this->valorEstimado;
    }

    /**
     * Set liquidado
     *
     * @param boolean $liquidado
     *
     * @return ReferenciaPatroimonialAutos
     */
    public function setLiquidado($liquidado)
    {
        $this->liquidado = $liquidado;

        return $this;
    }

    /**
     * Get liquidado
     *
     * @return boolean
     */
    public function getLiquidado()
    {
        return $this->liquidado;
    }
}
